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
							<div style="background-color: #9EBFFE;">
								<div class="row">
								
									<div class="col-12 ">
										<img src="app/assets/images/logo.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="card-body pt-0 border-top">
								<div class="p-2">
									<form id="frm" class="form-horizontal">

										<div class="mb-3">
											<label class="form-label">Tipo Usuario</label>
											<select class="form-control" id="usertype" required>
												 <option value="1">ASESOR</option>
												 <option value="0">COORDINADOR</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Nombre Usuario</label>
											<input type="text" class="form-control" id="username" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Contraseña</label>
											<div class="input-group auth-pass-inputgroup">
												<input type="password" class="form-control" id="password" >
												<button class="btn btn-light " type="button" id="password-addon" required>
													<i class="mdi mdi-eye-outline"></i>
												</button>
											</div>
										</div>
										<div class="mt-5 d-grid">
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
		<script>

		$(document).ready(function() {
			$('#frm')[0].reset();
			localStorage.clear();
			login();
		});
		let http_data = "http://localhost/server/cobranza_api/api/";

		const login = () =>{
			$('#frm').on('submit', function(e) {
				e.preventDefault();
				let user = $("#username").val();
				let pass = $("#password").val();
				let type = $("#usertype").val();
				let url = http_data + 'login?u=' + user + '&p=' + pass+ '&t=' + type;
				select_asesor(url);
			});
		}

		const select_asesor = async (url) => {
			try {
				const resp = await fetch(url);
				const data = await resp.json();
				await process_data(data);
			} catch (e) {
				console.log('no hay resultados:' + e)
			}
		};

		const process_data = (data) => {
			let data_num = data.num;
			if (data_num == 1){
				let data_user = data.data[0];
				let url_session = 'app/php/session.php?a=on&t='+data_user['usertype'];
				localStorage.setItem('session_name', data_user['nombre']);
				localStorage.setItem('session_user', data_user['username']);
				localStorage.setItem('session_type', data_user['usertype']);
				localStorage.setItem('session', 'ACTIVE');
				$.ajax({
					url: url_session
				}).done(function(e) {  
					window.location = "public/";
				});

				
			} else {
				error(data);
			}
		}

		function error(data) {
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
			toastr["error"]("Los datos de acceso  no son correctos");
			console.log(data);
		}
		</script>
	</body>
	</html>