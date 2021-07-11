<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @package   Magenizr_AdminUser
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Model\ResourceModel\Activity;

/**
 * Class Collection
 *
 * @package Magenizr\Notification\Model\ResourceModel\Activity
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    // @codingStandardsIgnoreStart
    protected function _construct()
    {
        $this->_init(\Magenizr\AdminUser\Model\Activity::class, \Magenizr\AdminUser\Model\ResourceModel\Activity::class);
    }
    // @codingStandardsIgnoreEnd
}
