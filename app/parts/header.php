<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>PORTRANS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Desarrollo para asociación alcaravan" name="description" />
	<meta content="AGENCIA CRAFT" name="author" />
	<link rel="icon" type="image/png" href="../app/assets/images/craft/favicon.png">
	<link href="../app/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../app/assets/means/DataTables/datatables.min.css" rel="stylesheet" type="text/css" />
	<link href="../app/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../app/assets/css/app.min.css" rel="stylesheet" type="text/css" />
	<link href="../app/assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark" class="sidebar-enable vertical-collpsed">
	<div id="layout-wrapper">
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<div class="navbar-brand-box">
						<a href="index" class="logo logo-light">
							<span class="logo-sm">
								<img src="../app/assets/images/craft/logo_sm.svg">
							</span>
							<span class="logo-lg">
								<img src="../app/assets/images/craft/logo_lg.svg">
							</span>
						</a>
					</div>
					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
						<i class="fa fa-fw fa-bars"></i>
					</button>
				</div>
				<div class="d-flex">
					<div class="dropdown d-none d-lg-inline-block ms-1">
						<button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
							<i class="bx bx-fullscreen"></i>
						</button>
					</div>
					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle header-profile-user" src="../app/assets/images/page/user.png">
							<span id="session_user_name" class=" d-xl-inline-block ml-1 mr-1"></span>
							<i class="fas fa-angle-down"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="perfil"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>PERFIL</span></a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-danger cursor-pointer" onclick="sessionOff()"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>CERRAR SESIÓN</span></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php require "menu.php" ?>