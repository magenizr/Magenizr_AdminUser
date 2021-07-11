/**
 * Magenizr AdminUser
 *
 * @category  Magenizr
 * @package   Magenizr_AdminUser
 * @copyright Copyright (c) 2021 Magenizr (https://agency.magenizr.com)
 * @license   https://www.magenizr.com/license Magenizr EULA
 */

define(
    [
    'Magento_Ui/js/grid/listing'
    ], function (Collection) {
        'use strict';

        return Collection.extend(
            {
                defaults: {
                    template: 'Magenizr_AdminUser/ui/grid/listing'
                },
                getRowClass: function (row) {

                    if (row.highlight == 'danger') {
                        return 'danger';
                    } else if (row.highlight == 'warning') {
                        return 'warning';
                    } else if (row.highlight == 'max-reached') {
                        return 'max-reached';
                    } else {
                        return '';
                    }
                }
            }
        );
    }
);
