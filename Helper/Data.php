<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://magenizr.com.au)
 * @license   https://magenizr.com.au/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Stdlib\DateTime\DateTimeFactory;

/**
 * Data
 *
 * Module helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public const TABLE_USER = 'admin_user';

    /**
     * @var string
     */
    protected $tab = 'admin/magenizr_adminuser';

    /**
     * @var DateTimeFactory
     */
    protected $dateFactory;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param DateTimeFactory $dateFactory
     */
    public function __construct(
        Context $context,
        DateTimeFactory $dateFactory
    ) {
        parent::__construct($context);

        $this->dateFactory = $dateFactory;
    }

    /**
     * Get current date based on date settings.
     *
     * @return string
     */
    public function getNow()
    {
        return $this->dateFactory->create()->gmtDate();
    }

    /**
     * Get difference between two dates. Return the number of days.
     *
     * @param string $dateTo
     * @param string $dateFrom
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
     * @param string $setting
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
