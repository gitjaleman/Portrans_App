<?php
 class Css
 {
   public function __construct(){
     if (isset($_GET["url"])) {
       $url = $this->parseUrl();
       try {
          $action = Router::getAction($url);
          $controllerName=$action["controller"];
          $method=$action["method"];
          echo '<link rel="stylesheet" type="text/css" href="../app/assets/css/'.$method.'.css">'; 
       } catch (Exception $e) {
        
       }
     }else{

      echo '<link rel="stylesheet" type="text/css" href="../app/assets/css/index.css">'; 
     }
   }
   public function parseUrl() {
     if (isset($_GET["url"])) {
      return $_GET["url"];
     }
   }
 }
?>
