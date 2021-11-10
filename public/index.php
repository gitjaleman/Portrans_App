<?php
session_start();
if (isset($_SESSION["session"])) {
  chdir( dirname(__DIR__) );
  define("SYS_PATH","lib/");
  define("APP_PATH","app/");
  require SYS_PATH."init.php";
  require APP_PATH."parts/header.php";
  $app =new App;
  require APP_PATH."parts/footer.php";
} else {
  header("Location: ../");
}
