<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://magenizr.com.au)
 * @license   https://magenizr.com.au/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Controller\Adminhtml\Activity;

use Magento\Framework\App\Action\HttpPostActionInterface;

/**
 * MassDisable
 *
 * Retrieve selected items for mass disable action.
 */
class MassDisable extends \Magenizr\AdminUser\Controller\Adminhtml\Activity implements HttpPostActionInterface
{
    /**
     * @var \Magenizr\AdminUser\Model\ResourceModel\Activity
     */
    private $activityModel;

    /**
     * MassDisable constructor.
     *
     * @param \Magento\Backend\App\Action\Context              $context
     * @param \Magenizr\AdminUser\Model\ResourceModel\Activity $activityModel
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magenizr\AdminUser\Model\ResourceModel\Activity $activityModel
    ) {
        $this->activityModel = $activityModel;

        parent::__construct($context);
    }

    /**
     * Execute MassDisable
     *
     * @return void
     */
    public function execute()
    {
        try {
            $userIds = $this->getRequest()->getPost('selected');

            if (is_array($userIds)) {
                $this->activityModel->updateUserStatus($userIds, 0);

                $this->messageManager->addSuccessMessage(
                    __(
                        'Disabled %1 user(s).',
                        count($userIds)
                    )
                );
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $this->_redirect('*/*/index');
    }
}
