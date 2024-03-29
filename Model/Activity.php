<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Model;

/**
 * Activity
 *
 * Init Resource Model
 */
class Activity extends \Magento\Framework\Model\AbstractModel
{
    // @codingStandardsIgnoreStart
    protected function _construct()
    {
        $this->_init(\Magenizr\AdminUser\Model\ResourceModel\Activity::class);
    }
    // @codingStandardsIgnoreEnd
}
