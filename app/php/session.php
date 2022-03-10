<?php
session_start();
$action =$_GET['a'];
$action = base64_decode($action);
if($action=='ACTIVE'){
  $type =$_GET['t'];
  $_SESSION["session"]='ACTIVE';
  $_SESSION["session_type"]=$type;
}else{
  session_destroy();
}