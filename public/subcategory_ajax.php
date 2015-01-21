<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
 if(isset($_POST['mycat'])){
    
      $cat = $_POST['mycat'];
       //print $cat;
        $sql = 'CALL get_subcat_by_category(:cat)';
        $params = array(':cat'=>$cat);
        // Execute the query and return the results
        $result = DatabaseHandler::GetAll($sql,$params);
        if($result)
        {
          for($i=0; $i < count($result); $i++)
           {
            $valueStr = 'value'.$i; 
            print    '<option value="'.$result[$i]['SubCategoryID'].'">'.$result[$i]['subcat_name'].'</option> ';                         
            }//close for
        }
        //close if
        else 
        {
         print "Error";
        }
    //print $_POST['mycat'];
 }
 else {
    print 'nop';
 }

/*
   if(isset($_POST['mycat']))
   {
       $cat = $_POST['mycat'];
       //print $cat;
        $sql = 'CALL get_subcat_by_category(:cat)';
        $params = array(':cat'=>$cat);
        // Execute the query and return the results
        $result = DatabaseHandler::GetAll($sql, $params);
        
        if($result){
          for($i=0; $i < count($result); $i++)
           {
            $valueStr = 'value'.$i; 
            print    '<option value="'.$result[$i]['SubCategoryID'].'">'.$result[$i]['subcat_name'].'</option> ';                         
            }//close for
        }//close if
        else {print "Error";}
       
      }
   else{
      echo    '<div style="color: black;">'.'not set'.'</div> ';  
   }
   */
?>

