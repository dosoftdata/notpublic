<?php

require_once dirname(dirname(__file__)) . '/config/classes.inc';
//fm_freight::load_freight();
//require_once dirname(dirname(__file__)) . '/config/classes.inc';
//fm_freight::load_freight();
$pageid = Util::fm_isset(fm_freight::SafeInput($_GET['page']));
$searchword = Util::fm_isset(fm_freight::SafeInput($_GET['fsorting']));

switch ($searchword)
        {
            case 'date_new':
                print 'Sort by : Newest shipping discount';
                require_once HELPERS_DIR . 'discount_main_list/newest.inc';
                break;
            case 'date_old':
                print 'Sort by : Oldest shipping discount';
                require_once HELPERS_DIR . 'discount_main_list/oldest.inc';
                break;
            case 'origin_az':
                print 'Sort by : Origin from A-Z shipping discount';
                require_once HELPERS_DIR . 'discount_main_list/originaz.inc';
                break;
            case 'origin_za':
                print 'Sort by : Origin from Z-Ashipping discount';
                require_once HELPERS_DIR . 'discount_main_list/originza.inc';
                break;
            case 'destination_az':
                print 'Sort by : Destination from A-Z shipping discount';
                require_once HELPERS_DIR . 'discount_main_list/destinationaz.inc';
                break;
            case 'destination_za':
                print 'Sort by : Destination from Z-A shipping discount';
                require_once HELPERS_DIR . 'discount_main_list/destinationza.inc';
                break;
            case 'lowest_discount':
                print 'Sort by : Lowest discount to Sheap';
                require_once HELPERS_DIR . 'discount_main_list/lowest_discount.inc';
                break;
             default:
            require_once HELPERS_DIR . 'discount_main_list/default.inc';
             break ;
                //un_quoted
        }




?>
