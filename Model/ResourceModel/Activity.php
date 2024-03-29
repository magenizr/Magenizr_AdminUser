<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Model\ResourceModel;

use Magenizr\AdminUser\Helper\Data as Helper;

/**
 * Style
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
     * @param int $userIds
     * @param string $status
     * @return mixed
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
