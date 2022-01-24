<?php


//$menu_configuracion = ["dir" => "configuracion", "text" => "CONFIGURACIÓN", "icon" => "bx-cog", "sub" => false];
$menu_configuracion = ["dir" => false, "text" => "CONFIGURACIÓN", "icon" => "bx-cog", "sub" => [
	["subdir" => "config_usuarios", "subtext" => "USUARIOS"],
	["subdir" => "config_vehiculos", "subtext" => "VEHÍCULOS"],
	["subdir" => "config_entidades", "subtext" => "ENTIDADES"],
	["subdir" => "config_empleados", "subtext" => "EMPLEADOS"],
	["subdir" => "config_ciudades", "subtext" => "CIUDADES"]
]];
$menu_registro = ["dir" => false, "text" => "REGISTRO", "icon" => "bx-pencil", "sub" => [
	["subdir" => "clientes", "subtext" => "CLIENTES"],
	["subdir" => "propietarios", "subtext" => "PROPIETARIOS"],
	["subdir" => "aliados", "subtext" => "ALIADOS"],
	["subdir" => "vehiculos", "subtext" => "VEHÍCULOS"],
	["subdir" => "empleados", "subtext" => "EMPLEADOS"]
]];
$menu_operaciones = ["dir" => false, "text" => "OPERACIONES", "icon" => "bx-chip", "sub" => [
	["subdir" => "plantillas", "subtext" => "PLANTILLAS"],
	["subdir" => "combustible", "subtext" => "COMBUSTIBLE"]
]];
$menu_web = ["dir" => false, "text" => "WEB", "icon" => "bx-world", "sub" => [
	["subdir" => "informacion", "subtext" => "INFORMACIÓN"],
	["subdir" => "galeria", "subtext" => "GALERIA"],
	["subdir" => "noticias", "subtext" => "NOTICIAS"]
]];





$menu_session_user	= array($menu_configuracion);
$menu_session_admin	= array($menu_configuracion,$menu_registro, $menu_operaciones,$menu_web);
$menu_session_type = $_SESSION['session_type'];
switch ($menu_session_type) {
	case 0:
		$menu_session_status = $menu_session_admin;
		break;

	case 1:
		$menu_session_status = $menu_session_user;
		break;
}
?>
<div class="vertical-menu">
	<div data-simplebar class="h-100">
		<div id="sidebar-menu">
			<ul class="metismenu list-unstyled" id="side-menu">
				<?php
				foreach ($menu_session_status as &$valor) {
					$menu_dir = $valor['dir'];
					$menu_icon = $valor['icon'];
					$menu_text = $valor['text'];
					$menu_sub = $valor['sub'];
					if ($menu_dir) {
						echo '
						<li class="mm-active" >
							<a href="' . $menu_dir . '" class="waves-effect">
								<i class="bx ' . $menu_icon . '"></i>
								<span>' . $menu_text . '</span>
							</a>
						</li>
						';
					} else {
						echo '
						<li  class="mm-active"  >
							<a class="has-arrow waves-effect">
								<i class="bx ' . $menu_icon . '"></i>
								<span key="t-tables">' . $menu_text . '</span>
							</a>
							<ul class="sub-menu mm-collapse" aria-expanded="false">';
							foreach ($menu_sub as &$valor) {
								$menu_sub_dir = $valor['subdir'];
								$menu_sub_text = $valor['subtext'];
								echo '<li><a class="active" href="'.$menu_sub_dir.'" >'.$menu_sub_text.'</a></li>';
							}
							echo '</ul>
						</li>
						';
					}
				}
			?>
			</ul>
		</div>
	</div>
</div>