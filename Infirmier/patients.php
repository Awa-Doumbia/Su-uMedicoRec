<?php
session_start();
error_reporting(0);
include('includes/db.php');
if (strlen($_SESSION['user_country']==0)) {
  header('location:logout.php');
  } else{
    $uid=$_SESSION['user_country'];
    $sth = $dbconn->prepare("select * from login where id='$uid'");
$sth->execute();
/* Fetch all of rows in the result set */
$result = $sth->fetchAll();

    ?>
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
		<title>SuñuMedicoRec</title>


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
						<li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Départements</li>
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
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Neurochirurgie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="dossier-medical.php">Papa Mar SECK</a>
										<a href="#">Mohamed Abdallah CISSE</a>
										<a href="#">Ndeye Bineta DIOUF</a>
										<a href="#">Cheikh Amadou Tidiane KANE</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dermatologie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Moustapha CISS</a>
										<a href="#">Fatoumata Fadera DEMBADIANG</a>
										<a href="#">Papa Ousmane CAMARA</a>
										<a href="#">Moussa DIALLO</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Cardiologie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Nalla NGOM</a>
										<a href="#">Ndeye Racky THIAM</a>
										<a href="#">Modou CAMARA</a>
										<a href="#">Edouard Babacar BADIO</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ophtalmologie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Mariama NDIAYE</a>
										<a href="#">Victor GOUDIABY</a>
										<a href="#">Fatimata Sow DIOME</a>
										<a href="#">Pape Idrissa NDOYE</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Orthopédie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Birame DIOUF</a>
										<a href="#">Ameth KA</a>
										<a href="#">Joel Momar GOMIS</a>
										<a href="#">Ramatoulaye SARR</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Dentiste</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Warkha NDIAYE</a>
										<a href="#">Fallou NIASSE</a>
										<a href="#">Amy NDOYE</a>
										<a href="#">Ibrahima DIOP</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Rhumatologie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Ange DIENG</a>
										<a href="#">Souleye DIENG</a>
										<a href="#">Malick NDIAYE</a>
										<a href="#">Salif DIOUF</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Psychiatrie</div>
								</div>
								<div class="card-body">
									<div class="doctors-list">
										<a href="#">Elhadji DIAW</a>
										<a href="#">Badou DIOUF</a>
										<a href="#">Bassirou NDOYE</a>
										<a href="#">Cheikh Anta DIOP</a>
									</div>
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

			<footer class="main-footer">© SuñuMedicoRec</footer>

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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>
<?php } ?>
