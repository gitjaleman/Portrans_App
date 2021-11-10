<?php 

$menu_buscar				=Array('buscar','BUSQUEDA','bx-search-alt');
$menu_gestion				=Array('gestion','GESTION','bx-pencil');
$menu_acuerdos			=Array('acuerdos','ACUERDOS','bx-select-multiple');
$menu_comunicacion	=Array('comunicacion','COMUNICACION','bx-conversation');
$menu_asesores			=Array('asesores','ASESORES','bxs-user-detail');
$menu_reportes			=Array('reportes','REPORTES','bx-poll');
$menu_base					=Array('base','BASE DE DATOS','bx-data');

$menu_session_user	=Array($menu_buscar);
$menu_session_admin	=Array($menu_buscar,$menu_asesores,$menu_reportes,$menu_base);

$menu_session_type= $_SESSION['session_type'];

if($menu_session_type ==0){
	$menu_session_status = $menu_session_admin;
}else{
	$menu_session_status = $menu_session_user;
}

?>

<div class="vertical-menu">
	<div data-simplebar class="h-100">
		<div id="sidebar-menu">
			<ul class="metismenu list-unstyled" id="side-menu">

			<?php

				foreach ($menu_session_status as &$valor) {

					echo'
					<li>
						<a href="'.$valor[0].'" class="waves-effect">
							<i class="bx '.$valor[2].'"></i>
							<span>'.$valor[1].'</span>
						</a>
					</li>
					';
					
				}




			?>

			
		
	
			
			
	

				
			</ul>
		</div>
	</div>
</div>