<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://magenizr.com.au)
 * @license   https://magenizr.com.au/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Model\ResourceModel;

use Magenizr\AdminUser\Helper\Data as Helper;

/**
 * Activity
 *
 * Init Resource Model
 */
class Activity extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    // @codingStandardsIgnoreStart
    protected function _construct() {
        $this->_init(Helper::TABLE_USER, 'user_id');
    }
    // @codingStandardsIgnoreEnd

    /**
     * Update the user status
     *
     * @param int[]|int $userIds
     * @param int $status
     * @return int
     */
    public function updateUserStatus($userIds, $status)
    {
        if (!is_array($userIds)) {
            $userIds = [$userIds];
        }

        return $this->getConnection()->update(
            $this->getMainTable(),
            ['is_active' => $status],
            $this->getIdFieldName() . ' IN (' . $this->getConnection()->quote($userIds) . ')'
        );
    }
}
