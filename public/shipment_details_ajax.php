<?php
    require_once dirname(dirname(__FILE__)).'/public/header.php';

   if(isset($_POST['myps']))
   {
       $subc = $_POST['myps'];
       fm_freight::Shipment_details($subc);            
   }
   else{
      echo    '<div style="color: black;">'.'not set'.'</div> '; 
   }
?>

