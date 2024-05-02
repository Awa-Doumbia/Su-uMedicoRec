
<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap Dashboards">
		<meta name="author" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="img/favicon.svg" />

		<!-- Title -->
		<title>Medical Admin Template - WYSIWYG editor</title>


		<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.min.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- Summernote CSS -->
		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />


	</head>

	<body>

<?php include_once('includes/header.php');?>
	<div class="container-fluid">
	<?php include_once('includes/nav.php');?>
			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">


				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">Saisi de note</li>
					</ol>
					<div class="site-award">
						<img src="img/logo.png" alt="Hospital Dashboards">
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">

						<div class="col-sm-12">
							<div class="card m-0">
								<div class="card-header">
									<div class="card-title">Note</div>
									<div class="card-sub-title">Veuiller saisir les notes prises.</div>
								</div>
								<div class="card-body">

									<div class="summernote"></div>

									<button class="btn btn-info" type="button">Enregistrer</button>
									<button class="btn btn-light" type="button">Annuler</button>

								</div>
							</div>

						</div>

					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->


			</div>
			<!-- *************
				************ Main container end *************
			************* -->

			<footer class="main-footer">© Bootstrap Gallery 2023</footer>

		</div>

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Summernote JS -->
		<script src="vendor/summernote/summernote-bs4.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

		<script>
			$(document).ready(function () {
				$('.summernote').summernote({
					height: 240,
					tabsize: 2
				});
			});
		</script>

	</body>

</html>