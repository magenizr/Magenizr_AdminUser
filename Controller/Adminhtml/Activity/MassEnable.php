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
 * MassEnable
 *
 * Retrieve selected items for mass enable action.
 */
class MassEnable extends \Magenizr\AdminUser\Controller\Adminhtml\Activity implements HttpPostActionInterface
{
    /**
     * @var \Magenizr\AdminUser\Model\ResourceModel\Activity
     */
    private $activityModel;

    /**
     * MassEnable constructor.
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
     * Execute MassEnable
     *
     * @return void
     */
    public function execute()
    {
        try {
            $userIds = $this->getRequest()->getPost('selected');

            if (is_array($userIds)) {
                $this->activityModel->updateUserStatus($userIds, 1);

                $this->messageManager->addSuccessMessage(
                    __(
                        'Enabled %1 user(s).',
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
