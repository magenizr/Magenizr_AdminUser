<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @package   Magenizr_AdminUser
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Data
 *
 * @package Magenizr\AdminUser\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const TABLE_USER = 'admin_user';

    /**
     * @var string
     */
    protected $tab = 'admin/magenizr_adminuser';

    /**
     * Get current date based on date settings.
     *
     * @return false|int
     */
    public function getNow()
    {
        return $this->dateFactory->create()->gmtDate();
    }

    /**
     * Get difference between two dates. Return the number of days.
     *
     * @param  string $dateFrom
     * @param  $dateTo
     * @return float
     */
    public function getDateDiff($dateTo, $dateFrom = 'now')
    {
        if ($dateFrom == 'now') {
            $dateFrom = $this->getNow();
        }

        return round(abs(strtotime($dateFrom) - strtotime($dateTo))/86400);
    }

    /**
     * Get module configuration values from core_config_data
     *
     * @param  $setting
     * @return mixed
     */
    public function getConfig($setting)
    {
        return $this->scopeConfig->getValue(
            $this->tab . '/' . $setting,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
