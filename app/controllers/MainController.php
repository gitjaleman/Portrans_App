<?php
	class MainController{
    public function index()             		{ Response::render("index");}
		public function buscar()             		{ Response::render("buscar");}
		public function gestion()             	{ Response::render("gestion");}
		public function acuerdo()             	{ Response::render("acuerdo");}
		public function comunicacion()          { Response::render("comunicacion");}
		public function asesores()             	{ Response::render("asesores");}
		public function reportes()             	{ Response::render("reportes");}
		public function base()             			{ Response::render("base");}
		public function perfil()             		{ Response::render("perfil");}
		public function alertas()             	{ Response::render("alertas");}
	}
?>
