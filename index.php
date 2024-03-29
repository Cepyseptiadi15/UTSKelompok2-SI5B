<!doctype html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<meta name="description" content="Aplikasi Penjualan Pulsa">
	<meta name="keywords" content="Aplikasi Penjualan Pulsa">
	<meta name="author" content="Indra Styawantoro">

	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.5. 0-web/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert/css/sweetalert.css">

	<link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap-4/css/chosen.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>


	<title>Data Transaksi Penjualan</title>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"> 
		<div class="container">
			<a class="navbar-brand" href="index.php"> 
				<img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top title-icon" alt="Logo"> 
				<span class="title">TORO CELL</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
				<span class="navbar-toggler-icon"></span> 
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse"> 
				<ul class="navbar-nav ml-auto"> 
					<li class="nav-item"> 
						<a class="nav-link mr-1 menu" id="beranda" href="javascript:void(0);"> 
							<i class="fas fa-home title-icon"></i> Beranda 
							
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mr-1 menu" id="pelanggan" href="javascript:void(0);"> 
							<i class="fas fa-user title-icon"></i> Pelanggan 
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mr-1 menu" id="pulsa" href="javascript:void(0);"> 
							<i class="fas fa-tablet-alt title-icon"></i> Pulsa 
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mr-1 menu" id="penjualan" href="javascript:void(0);"> 
							<i class="fas fa-shopping-cart title-icon"></i>Penjualan
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mr-1 menu" id="laporan" href="javascript:void(0);"> 
							<i class="fas fa-file-alt title-icon"></i>Laporan
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main role="main" class="container mt-5">
		
		<div class="content"></div>
	</main>


	<div class="container">
		<footer class="pt-4 my-md-4 pt-md-3 border-top">
			<div class="row">
				<div class="col-12 col-md center">
					&copy; 2018 - <a class="text-info" href="http://torolab.id/">torolab.id</a>
				</div>
			</div>
		</footer>
	</div>


	<script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="assets/plugins/fontawesome-free-5.5.0-web/js/all.min.js"></script>

	<script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript" src="assets/plugins/sweetalert/js/sweetalert.min.js"></script>

	<script type="text/javascript" src="assets/plugins/chosen-bootstrap-4/js/chosen.jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function() { 
			$('.content').load('modules/beranda/view.php'); 
			$('.menu').click(function(){ 
				var menu = $(this).attr('id'); 
				if (menu=="beranda") { 
					$('.content').load('modules/beranda/view.php'); 
				}
				else if (menu=="pelanggan") { 
					$('.content').load('modules/pelanggan/view.php'); 
				}
				else if (menu=="pulsa") { 
					$('.content').load('modules/pulsa/view.php'); 
				}
				else if (menu=="penjualan") { 
					$('.content').load('modules/penjualan/view.php'); 
				}
				else if (menu=="laporan") { 
					$('.content').load('modules/laporan/view.php'); 
				}
			});
		});

		function getkey(e) {
			if (window.event)
				return window.event.keyCode;
			else if (e)
				return e.which;
			else
				return null;
		}

		function goodchars(e, goods, field) {
			var key, keychar;
			key = getkey(e);
			if (key == null) return true;

			keychar = String.fromCharCode(key); 
			keychar = keychar.toLowerCase(); 
			goods = goods.toLowerCase(); 


			if (goods.indexOf(keychar) != -1) 
				return true;

			if ( key==null || key==0 || key==8 || key==9 || key==27 ) 
				return true;

			if (key == 13) {
				var i;
				for (i = 0; i < field.form.elements.length; i++) 
					if (field == field.form.elements[i]) 
						break;
					i = (i + 1) % field.form.elements.length; 
					field.form.elements[i].focus(); 
					return false;
				};
				return false;
			}
	</script>
</body>
</html>