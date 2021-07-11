This module will help you to identify rarely used admin accounts and allow you to disable or delete them directly.

![Magenizr AdminUser - Backend](https://images2.imgbox.com/da/8f/wcLj1jC4_o.gif)

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

## Installation (Composer)

1. Update your composer.json `composer require "magenizr/magento2-adminuser":"1.0.0" --no-update`
2. Install dependencies and update your composer.lock `composer update --lock`

```
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)              
Package operations: 1 install, 0 updates, 0 removals
  - Installing magenizr/magento2-adminuser (1.0.0): Downloading (100%)         
Writing lock file
Generating autoload files
```

3. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminUser --clear-static-content
php bin/magento setup:upgrade
```

## Installation (Manually)

1. Download the code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_AdminUser_1.0.0.tar.gz`.
3. Copy the code into `./app/code/Magenizr/AdminUser/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminUser --clear-static-content
php bin/magento setup:upgrade
```

## Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/magenizr/Magenizr_AdminUser/issues).

## Contact
Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr) and [Facebook](https://www.facebook.com/magenizr).

## History
===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
