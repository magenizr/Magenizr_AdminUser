<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://magenizr.com.au)
 * @license   https://magenizr.com.au/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Username
 *
 * Manipulate column
 */
class Username extends Column
{
    /**
     * Username constructor.
     *
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
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
        $template = '<a href="%s">%s</a>';

        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['user_id'])) {
                    $userId = $item['user_id'];
                    $url = $this->context->getUrl('adminhtml/user/edit/user_id', ['user_id' => $userId]);

                    $username = $item['username'];

                    $item['username'] = sprintf($template, $url, $username);
                }
            }
        }

        return $dataSource;
    }
}
