<?php
session_start();
$action =$_GET['a'];
if($action=='on'){
  $type =$_GET['t'];
  $_SESSION["session"]='ACTIVE';
  $_SESSION["session_type"]=$type;
}else{
  session_destroy();
}

