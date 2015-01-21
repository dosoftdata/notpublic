 <?php 
// 1count 2.data, 3 div
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = FREIGHT_LIST_PER_PAGE; //how much records you want to show
	$adjacents  = FREIGHT_LIST_PER_PAGE; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	
	//Count the total number of row in your table*/
    $sql = 'CALL count_all_freight()';
	$numrows = DatabaseHandler::Countall($sql);
	$total_pages = ceil($numrows/$per_page);
	$reload = 'ajax/review.php';
	
	//main query to fetch the data
	$sqldta ='CALL get_all_freight(:tostart,:toend)';
    $sqlparams =array(':tostart'=>$offset,':toend'=>$per_page);
    $result =DatabaseHandler::GetAll($sqldta,$sqlparams);
	//loop through fetched data
    for($i=0; $i<count($result); $i++)
        {
         print '<div class="content">'.$result[$i]['FreightID'].'</div>';   
        }//end for
print Util::fmpaginate($reload, $page, $total_pages, $adjacents);
} else{
?>
   <script>
   $(document).ready(function() {
    $(".transporterinfo").click(function() {
        //floadershow2();
        $.ajax({ url: 'ajax/review.php', success: function(html) {
            $("#transporterinfo").empty().append(html);
            loadreview(1);
            }
    });
    return false;
    });

});//doc

   
   </script>
    <?php }?>