<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Controller\Adminhtml\Activity;

/**
 * Index
 *
 * Set pagetitle for admin grid.
 */
class Index extends \Magenizr\AdminUser\Controller\Adminhtml\Activity
{
    /**
     * @var bool|\Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory = false;

    /**
     * Index constructor.
     *
     * @param \Magento\Backend\App\Action\Context        $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {

        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Execute Index
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__('User Activity')));

        return $resultPage;
    }
}
