<?php
  class Response{
    private function __construct(){}
      public static function render($view, $params=[]){
        foreach ($params as $key => $value) {
          $$key = $value;
        }
        require APP_PATH."views/".$view.".php";
      }

  }
?>
