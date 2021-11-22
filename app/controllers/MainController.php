<?php
	class MainController{
    public function index()             		{ Response::render("index");}

		public function configuracion()         { Response::render("configuracion");}

		public function clientes()             	{ Response::render("clientes");}
		public function propietarios()          { Response::render("propietarios");}
		public function aliados()             	{ Response::render("aliados");}
		public function vehiculos()             { Response::render("clientes");}
		public function empleados()             { Response::render("empleados");}

		public function plantillas()            { Response::render("plantillas");}
		public function combustible()           { Response::render("combustible");}

		public function informacion()           { Response::render("informacion");}
		public function galeria()          			{ Response::render("galeria");}
		public function noticias()             	{ Response::render("noticias");}

		public function perfil()              	{ Response::render("perfil");}

	}
?>
