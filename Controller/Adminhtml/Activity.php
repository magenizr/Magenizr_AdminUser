<?php
/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @copyright Copyright (c) 2021 Magenizr (https://magenizr.com.au)
 * @license   https://magenizr.com.au/license Magenizr EULA
 */

namespace Magenizr\AdminUser\Controller\Adminhtml;

/**
 * Activity
 */
abstract class Activity extends \Magento\Backend\App\Action
{
    public const ADMIN_RESOURCE = 'Magenizr_AdminUser::activity';
}
