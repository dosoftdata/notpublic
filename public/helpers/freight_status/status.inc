<?php

/**
 * @author LiveLong
 * @copyright 2014
 */

switch ($mstatus)
{
    case 0:
        print '<span class="status-cancelled">Cancelled</span><br />';
        break;
    case 1:
        print '<span class="status-active">active</span><br />';
        break;
    case 2:
        print '<span class="status-expired">expired</span><br />';
        break;
    case 3:
        print '<span class="status-booked">Booked</span><br /> By the Customer';
        break;
    case 4:
        print '<span class="status-accepted">In process</span><br />';
        break;
    case 5:
        print '<span class="status-complete">Completed</span><br />';
        break;
    case 6:
        print '<span class="status-complete">Payed</span><br />';
        break;

}

?>