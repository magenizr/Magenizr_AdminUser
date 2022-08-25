<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Ui\Component\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Highlight
 *
 * Manipulate column
 */
class Highlight extends Column
{
    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * @var \Magenizr\AdminUser\Helper\Data
     */
    private $helper;

    /**
     * DateDifference constructor.
     *
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param UrlInterface $urlBuilder
     * @param \Magenizr\AdminUser\Helper\Data $helper
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        \Magenizr\AdminUser\Helper\Data $helper,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        $this->helper = $helper;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare data source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['user_id'])) {
                    $logDate = $item['logdate'];

                    if (!empty($item['logdate'])) {
                        // Highlight row after X days
                        $daysHighlight = (int)$this->helper->getConfig('highlight_users_after_days');
                        $daysDiff = (int)$this->helper->getDateDiff('now', $logDate);

                        if ($daysDiff >= $daysHighlight) {
                            $item['highlight'] = 'warning';
                        }
                    } else {
                        // Highlight row if logdate is empty
                        $item['highlight'] = 'warning';
                    }

                    // Highlight row if failed logins were registered
                    if ($item['failures_num'] > 0) {
                        $item['highlight'] = 'danger';
                    }
                }
            }
        }

        return $dataSource;
    }
}
