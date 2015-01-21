    <div id="site-top-bar" class="mainboxshadow" >
<div id="site-top-bar_content">
<a style="color: #FFFFFF;" href="<?= Link::Build(''); ?>">
<div id="site-top-bar_logo" style="font-size: 28px; font-weight: bold;">
Freightmeta<span style="color: #7F7F7F;">.com</span>
</div>
</a>
<div  id="site-top-bar_addfreight" style="font-size: 10px;" >
<ul style="margin-left: 0px;">
<li><span ><a href="<?= Link::Build('public/add_freight.php'); ?>" >Freights</a></span></li>
<li  style="margin-top: -7px;"><span style="font-weight: lighter;" ><a href="<?= Link::Build('public/add_freight.php'); ?>">Add your Freight</a></span></li>
</ul>
</div>
<div  id="site-top-bar_addfreight1" style="font-size: 10px;" >
<ul style="margin-left: 0px;">
<li><span ><a  href="<?= Link::Build('public/freight_list.php'); ?>">Quotes</span></a></li>
<li style="margin-top: -7px;"><span style="font-weight: lighter;" ><a href="<?= Link::Build('public/freight_list.php'); ?>">Freight Quotes</span></a></li>
</ul>
</div>
<div  id="site-top-bar_addfreight2"style="border-right: none;font-size: 10px;" >
<ul style="margin-left: 0px;">
<!---li><span ><a href="<?= Link::Build('public/logout.php'); ?>" ><?= LOGOUT ?> </a></span><span style="font-size: 20px;">or</span></li!---->
<li style="margin-top: -8px;"><span style="font-weight: lighter;"><a href="<?= Link::Build('public/logout.php'); ?>"><?= LOGOUT ?> </a></span>
</li>
</ul>
</div>
</div>
  <!--ul class="mainboxshadow">
  <li id="help1" style="width: 25%;">
  <h1 id="freightmeta">Freightmeta</h1>
  <p id="shipping">Shipping Smart & Fast </p>
  </li>
  <li id="help1"> 
  <a class="colorhelp" href="<?php // SITE_URL?>"><h1 id="home" >Home</h1></a>
  </li>
  <li id="help1">
  <a href="<?php // SITE_URL?>public/add_freight.php" >
  <h1 id="freights">Freights</h1>
  <p id="addfreight" style="">Add your freight </p>
  </a>
  </li>
  <li id="help1">
  <a href="<?php // SITE_URL?>public/freight_list.php">
  <h1 id="quotes"> Quotes</h1>
  <p id="freightquotes">Freights Quotes </p>
  </a>
  </li>
  <li id="help2" style="width: 25%;">
  <h1 id="myfreightmeta">My Freightmeta</h1>
  <p id="login">
          <div class="active-links">
            <div id="session" class="button">
            <a id="signin-link" href="#">
            <strong><?php // LOGIN ?></strong>
            </a>
            </div>
                <div id="login_fm" style="color:white" class="arrow_box_login">
                <a  href="<?php // SITE_URL?>public/login.php" target="_parent">Login </a> <span style="color: black;">or</span> <a href="<?= SITE_URL?>public/account.php" target="_parent">Register</a>
                </div>            
</div>
  </p>
  <img  id="login_icon" alt="login" src="<?php /// SITE_URL?>public/images/btn/log.png" />
  <img  id="arrow_header" alt="login" src="<?php // SITE_URL?>public/images/btn/arrow.gif" />
  </li>
  </ul!--->
</div>