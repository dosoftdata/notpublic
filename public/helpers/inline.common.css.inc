<?php

print '
<style type="text/css">
.successbox {
	background-color:#f4f4f4 !important;
	background-image:url(../public/images/gen/tick_small.png);
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:16px;
	color: black;	
	padding: 10px; 
	padding-left: 45px;
	padding-top: 16px;
	padding-bottom: 15px;
	text-align: left;	
	margin-bottom: 15px;	
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
}
.failurebox {
	background-image:url(../public/images/gen/error2.png);
	background-repeat:no-repeat;
	border: 2px solid #d30000; 
	background-color: #ffeee9; 
	padding: 10px; 
	padding-left: 50px;
	padding-top: 8px;
	text-align: left;
    font-size: 15px;
	color:#d30000;
	bottom: 15px;
    padding-bottom: 15px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
}
.actionbox {
    position: fixed;
    margin: 0 auto;
    left: 40%;
    right: 40%;
    width: auto;
    height: auto;
    top: 40%;
    bottom: 45%;
	background-color:#f4f4f4 !important;
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:11pt;
	color: black;	
	padding: 10px; 
	text-align: left;		
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
    z-index: 99999 !important;
}
.actionbox_note{
 position: relative;
 margin-top: 0px;
 margin-bottom: 10px;
 width: 100%;
 height: auto;
 letter-spacing: -1px;
 line-height: 20px;
    
}

.actionbox_ok{
    position: absolute;
    top: 43px;
    left: 60px;
    width: 48px; height: 48px;
    background: url(../public/images/btn/allow.png) no-repeat;
    background-size: 100% 100%;
}
.actionbox_no{
    position: absolute;
    top: 43px;
    left: 120px;
    width: 48px; height: 48px;
    background: url(../public/images/btn/denied.png) no-repeat;
    background-size: 100% 100%;
}
</style>

';