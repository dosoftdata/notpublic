<?php

require_once dirname(dirname(__file__)) . '/config/classes.inc';
//fm_freight::load_freight();
//require_once dirname(dirname(__file__)) . '/config/classes.inc';
//fm_freight::load_freight();
$pageid = Util::fm_isset(fm_freight::SafeInput($_GET['page']));
$searchword = Util::fm_isset(fm_freight::SafeInput($_GET['fsorting']));
//print $searchword;

switch ($searchword)
        {
            case 'date_new':
                print 'Sort by : Newest freight';
                require_once HELPERS_DIR . 'freight_main_list/newest.inc';
                break;
            case 'date_old':
                print 'Sort by : Oldest freight';
                require_once HELPERS_DIR . 'freight_main_list/oldest.inc';
                break;
            case 'origin_az':
                print 'Sort by : Origin from A-Z freight';
                require_once HELPERS_DIR . 'freight_main_list/originaz.inc';
                break;
            case 'origin_za':
                print 'Sort by : Origin from Z-A freight';
                require_once HELPERS_DIR . 'freight_main_list/originza.inc';
                break;
            case 'destination_az':
                print 'Sort by : Destination from A-Z freight';
                require_once HELPERS_DIR . 'freight_main_list/destinationaz.inc';
                break;
            case 'destination_za':
                print 'Sort by : Destination from Z-A freight';
                require_once HELPERS_DIR . 'freight_main_list/destinationza.inc';
                break;
            case 'most_view':
                print 'Sort by : Most viewed freight';
                require_once HELPERS_DIR . 'freight_main_list/most_view.inc';
                break;
            case 'lowest_quote':
                print 'Sort by : Lowest quote to Sheap';
                require_once HELPERS_DIR . 'freight_main_list/lowest_quote.inc';
                break;
             case 'un_quoted':
                print 'Sort by :Unquoted freight list';
                require_once HELPERS_DIR . 'freight_main_list/unquoted.inc';
                break;
             default:
            require_once HELPERS_DIR . 'freight_main_list/deffault.inc';
             break ;
                //un_quoted
        }



?>