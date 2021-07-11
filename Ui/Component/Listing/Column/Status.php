<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @package   Magenizr_AdminUser
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Ui\Component\Listing\Column;

/**
 * Class Status
 *
 * @package Magenizr\Notification\Ui\Component\Listing\Column
 */
class Status implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Disabled')],
            ['value' => 1, 'label' => __('Enabled')]
        ];
    }
}
