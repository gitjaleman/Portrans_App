<?php
  Router::add("index",              "MainController",   "index");

  Router::add("config_usuarios",     "MainController",   "config_usuarios");
  Router::add("config_vehiculos",    "MainController",   "config_vehiculos");
  Router::add("config_entidades",    "MainController",   "config_entidades");
  Router::add("config_empleados",    "MainController",   "config_empleados");
  Router::add("config_ciudades",     "MainController",   "config_ciudades");


  Router::add("clientes",           "MainController",   "clientes");
  Router::add("propietarios",       "MainController",   "propietarios");
  Router::add("aliados",            "MainController",   "aliados");
  Router::add("vehiculos",          "MainController",   "vehiculos");
  Router::add("empleados",          "MainController",   "empleados");

  Router::add("plantillas",         "MainController",   "plantillas");
  Router::add("combustible",        "MainController",   "combustible");

  Router::add("informacion",        "MainController",   "informacion");
  Router::add("galeria",            "MainController",   "galeria");
  Router::add("noticias",           "MainController",   "noticias");

  Router::add("perfil",             "MainController",   "perfil");

?>