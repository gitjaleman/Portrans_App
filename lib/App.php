<?php
 class App
 {
   public function __construct(){
     if (isset($_GET["url"])) {
       $url = $this->parseUrl();
       try {
         $action = Router::getAction($url);
         $controllerName=$action["controller"];
         $method=$action["method"];
         require APP_PATH."controllers/".$controllerName.".php";
         $controller = new $controllerName();
         $controller->$method();
       } catch (Exception $e) {
         require APP_PATH."views/error.php";
       }
     }else{
       require APP_PATH."views/index.php";
     }
   }
   public function parseUrl() {
     if (isset($_GET["url"])) {
      return $_GET["url"];
     }
   }
 }
?>
