<?php
	class MainController{
    public function index()             				{ Response::render("index");}

		public function config_usuarios()         	{ Response::render("config_usuarios");}
		public function config_vehiculos()         	{ Response::render("config_vehiculos");}
		public function config_entidades()         	{ Response::render("config_entidades");}
		public function config_empleados()         	{ Response::render("config_empleados");}
		public function config_ciudades()         	{ Response::render("config_ciudades");}

		public function clientes()             			{ Response::render("clientes");}
		public function propietarios()          		{ Response::render("propietarios");}
		public function aliados()             			{ Response::render("aliados");}
		public function vehiculos()             		{ Response::render("vehiculos");}
		public function empleados()             		{ Response::render("empleados");}

		public function plantillas()            		{ Response::render("plantillas");}
		public function combustible()           		{ Response::render("combustible");}

		public function informacion()           		{ Response::render("informacion");}
		public function galeria()          					{ Response::render("galeria");}
		public function noticias()             			{ Response::render("noticias");}

		public function perfil()              			{ Response::render("perfil");}

	}
?>
