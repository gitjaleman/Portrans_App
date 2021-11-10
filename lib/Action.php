<?php
 class Action
 {
   public function __construct(){
     if (isset($_GET["url"])) {
       $url = $this->parseUrl();
       try {
         $action = Router::getAction($url);
         $controllerName=$action["controller"];
         $method=$action["method"];
          echo '<script src="../app/action/'.$method.'.js"></script>'; 
       } catch (Exception $e) {
        
       }
     }else{
      echo '<script src="../app/action/index.js"></script>'; 
     }
   }
   public function parseUrl() {
     if (isset($_GET["url"])) {
      return $_GET["url"];
     }
   }
 }
?>
