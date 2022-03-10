<?php
session_start();
session_destroy();
?>
<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>GESTION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Sistema Gestión" name="description" />
	<meta content="AGENCIA CRAFT" name="author" />
	<link rel="icon" type="image/png" href="app/assets/images/craft/favicon.png">
	<link rel="stylesheet" href="app/assets/libs/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="app/assets/libs/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="app/assets/libs/toastr/build/toastr.min.css">
	<link href="app/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link href="app/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="app/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body style="background-color: #303952 ;">
	<div class="account-pages my-5 pt-sm-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card overflow-hidden">
						<div>
							<div class="row">

								<div class="col-12 ">
									<img src="app/assets/images/logo.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="card-body pt-1 border-top">
							<div class="p-2">
								<form id="frm" class="form-horizontal">

									<div class="mb-3">
										<label class="form-label">Nombre Usuario</label>
										<input type="text" class="form-control" id="username" required>
									</div>
									<div class="mb-3">
										<label class="form-label">Contraseña</label>
										<div class="input-group auth-pass-inputgroup">
											<input type="password" class="form-control" id="password">
											<button class="btn btn-light " type="button" id="password-addon" required>
												<i class="mdi mdi-eye-outline"></i>
											</button>
										</div>
									</div>
									<div class="mt-3 d-grid">
										<button class="btn btn-lg btn-success waves-effect waves-light " type="submit">
											<b>INGRESO</b>
										</button>
									</div>

								</form>

							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<script src="app/assets/libs/jquery/jquery.min.js"></script>
	<script src="app/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="app/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="app/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="app/assets/libs/node-waves/waves.min.js"></script>
	<script src="app/assets/libs/toastr/build/toastr.min.js"></script>
	<script src="app/assets/js/app.js"></script>
	<script src="app/config/connection.js"></script>
	<script>

		$(document).ready(function() {
			$('#frm')[0].reset();
			localStorage.clear();
			login();
		});

		const login = () => {
			$('#frm').on('submit', function(e) {
				e.preventDefault();
				let user = $("#username").val();
				let pass = $("#password").val();
				let formData = new FormData();
				formData.append('u', user);
				formData.append('p', pass);
				let url = 'login';
				FETCH_POST(url,null,formData);
			});
		}

		const PROCESS_POST = (data,post_process) => {
			let getdata = data.data;
			let geturl = data.url;
			if(getdata != false){
				let data_user = data.data[0];
				let session_url = geturl+data_user['usertype'];
				localStorage.setItem('session_name', data_user['nombre']);
				localStorage.setItem('session_user', data_user['username']);
				localStorage.setItem('session_type', data_user['usertype']);
				sessionStorage.setItem('session', 'ACTIVE');
				$.ajax({
					url: session_url
				}).done(function(e) {
					window.location = "public/";
				});
			}else{
				NOTIFICATION('error','Usuario o contraseña incorrecta')
			}
		}




	function NOTIFICATION(type,msj) {
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": 300,
			"hideDuration": 1000,
			"timeOut": 5000,
			"extendedTimeOut": 1000,
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr[type](msj);
	}

	</script>
</body>

</html>