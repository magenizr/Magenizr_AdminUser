[![Magenizr Plus](https://images2.imgbox.com/11/6b/yVOOloaA_o.gif)](https://account.magenizr.com)
---

[![Latest Stable Version](https://poser.pugx.org/magenizr/magento2-adminuser/v)](https://packagist.org/packages/magenizr/magento2-adminuser) [![Total Downloads](https://poser.pugx.org/magenizr/magento2-adminuser/downloads)](https://packagist.org/packages/magenizr/magento2-adminuser) [![Latest Unstable Version](https://poser.pugx.org/magenizr/magento2-adminuser/v/unstable)](https://packagist.org/packages/magenizr/magento2-adminuser) [![License](http://poser.pugx.org/magenizr/magento2-adminuser/license)](https://packagist.org/packages/magenizr/magento2-adminuser) [![PHP Version Require](https://poser.pugx.org/magenizr/magento2-adminuser/require/php)](https://packagist.org/packages/magenizr/magento2-adminuser)

# Admin User
This module will help you to identify rarely used admin accounts and allow you to disable or delete them directly.

![Magenizr AdminUser - Backend](https://images2.imgbox.com/66/a2/i8yhurQo_o.png)

## Business Value
The more admin user accounts are enabled in Magento®, the higher is the risk of getting compromised. 

* Disabling rarely used admin accounts will lower the risk of getting compromised. 
* It helps your team and client to keep admin user accounts under control.

## Features
* It shows rarely used admin user accounts at the beginning on the list.
* Bulk `enable` or `disable` admin accounts.

## Usage
Go to `System > Permissions > User Activity` to see all admin users sorted by the last login date.

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 5.6.x, 7.x

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-adminuser":"1.0.1" --no-update`
2. Use `composer update magenizr/magento2-adminuser --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-adminuser (1.0.1)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing magenizr/magento2-adminuser (1.0.1): Extracting archive
```

4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminUser --clear-static-content
```

## Installation (Manually)

1. Download the code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_AdminUser_1.0.1.tar.gz`.
3. Copy the code into `./app/code/Magenizr/AdminUser/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminUser --clear-static-content
```

## Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/magenizr/Magenizr_AdminUser/issues).

## Contact
Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr) and [Facebook](https://www.facebook.com/magenizr).

## History
===== 1.0.1 =====
* 2.4.x compatibility tested
* Version removed from module.xml
* Cleanup by following coding standards (EQP, ECG)

===== 1.0.1 =====
* 2.4.x compatibility added
* Cleanup by following coding standards (EQP, ECG)

===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
