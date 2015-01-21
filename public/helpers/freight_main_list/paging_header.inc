<?php
/**
 * @author LiveLong
 * @copyright 2014
 */
$vpb_pagination_stages = 2;
$vpb_current_page = $pageid;
$vpb_start_page = ($vpb_current_page - 1) * $vpb_page_limit;


//This initializes the page setup
if ($vpb_current_page == 0)
{
    $vpb_current_page = 1;
}
$vpb_previous_page = $vpb_current_page - 1;
$vpb_next_page = $vpb_current_page + 1;
$vpb_last_page = ceil($vpb_get_total_pages / $vpb_page_limit);
$vpb_lastpaged = $vpb_last_page - 1;
$vpb_pagination_system = '';
if ($vpb_last_page > 1)
{
    $vpb_pagination_system .= "<div class='vpb_pagination_system'>";
    // Previous Page
    if ($vpb_current_page > 1)
    {
        $vpb_pagination_system .=
            "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_previous_page\",\"$searchword\");'> << </a>";
    } else
    {
        $vpb_pagination_system .= "<span class='disabled'> << </span>";
    }
    // Pages
    if ($vpb_last_page < 7 + ($vpb_pagination_stages * 2))
        // Not enough pages to breaking it up
    {
        for ($vpb_page_counter = 1; $vpb_page_counter <= $vpb_last_page; $vpb_page_counter++)
        {
            if ($vpb_page_counter == $vpb_current_page)
            {
                $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
            } else
            {
                $vpb_pagination_system .=
                    "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\",\"$searchword\");'>$vpb_page_counter</a>";
            }
        }
    } elseif ($vpb_last_page > 5 + ($vpb_pagination_stages * 2))
    // This hides few pages when the displayed pages are much
    {
        //Beginning only hide later pages
        if ($vpb_current_page < 1 + ($vpb_pagination_stages * 2))
        {
            for ($vpb_page_counter = 1; $vpb_page_counter < 4 + ($vpb_pagination_stages * 2);
                $vpb_page_counter++)
            {
                if ($vpb_page_counter == $vpb_current_page)
                {
                    $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                } else
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\",\"$searchword\");'>$vpb_page_counter</a>";
                }
            }
            $vpb_pagination_system .= "...";
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_lastpaged\",\"$searchword\");'>$vpb_lastpaged</a>";
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_last_page\",\"$searchword\");'>$vpb_last_page</a>";
        }
        //Middle hide some front and some back
        elseif ($vpb_last_page - ($vpb_pagination_stages * 2) > $vpb_current_page && $vpb_current_page >
            ($vpb_pagination_stages * 2))
        {
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"1\");'>1</a>";
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"2\");'>2</a>";
            $vpb_pagination_system .= "...";
            for ($vpb_page_counter = $vpb_current_page - $vpb_pagination_stages; $vpb_page_counter <=
                $vpb_current_page + $vpb_pagination_stages; $vpb_page_counter++)
            {
                if ($vpb_page_counter == $vpb_current_page)
                {
                    $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                } else
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\",\"$searchword\");'>$vpb_page_counter</a>";
                }
            }
            $vpb_pagination_system .= "...";
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_lastpaged\",\"$searchword\");'>$vpb_lastpaged</a>";
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_last_page\",\"$searchword\");'>$vpb_last_page</a>";
        }
        //End only hide early pages
        else
        {
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"1\");'>1</a>";
            $vpb_pagination_system .=
                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"2\");'>2</a>";
            $vpb_pagination_system .= "...";
            for ($vpb_page_counter = $vpb_last_page - (2 + ($vpb_pagination_stages * 2)); $vpb_page_counter <=
                $vpb_last_page; $vpb_page_counter++)
            {
                if ($vpb_page_counter == $vpb_current_page)
                {
                    $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                } else
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\",\"$searchword\");'>$vpb_page_counter</a>";
                }
            }
        }
    }
    //Next Page
    if ($vpb_current_page < $vpb_page_counter - 1)
    {
        $vpb_pagination_system .=
            "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_next_page\",\"$searchword\");'>>></a>";
    } else
    {
        $vpb_pagination_system .= "<span class='disabled'><<</span>";
    }
    $vpb_pagination_system .= "</div>";
}


?>