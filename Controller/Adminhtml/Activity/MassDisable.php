<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Controller\Adminhtml\Activity;

use Magento\Framework\Controller\ResultFactory;

/**
 * MassDisable
 *
 * Retrieve selected items for mass disable action.
 */
class MassDisable extends \Magenizr\AdminUser\Controller\Adminhtml\Activity
{
    /**
     * @var \Magenizr\AdminUser\Model\ResourceModel\Activity
     */
    private $activityModel;

    /**
     * MassDisable constructor.
     *
     * @param \Magento\Backend\App\Action\Context              $context
     * @param \Magento\Framework\View\Result\PageFactory       $resultPageFactory
     * @param \Magenizr\AdminUser\Model\ResourceModel\Activity $activityModel
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magenizr\AdminUser\Model\ResourceModel\Activity $activityModel
    ) {
        $this->resultPageFactory = $resultPageFactory;
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

                $this->messageManager->addSuccess(
                    __(
                        'Disabled <strong>%1</strong> user(s).',
                        count($userIds)
                    )
                );
            }
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }

        $this->_redirect('*/*/index');
    }
}
