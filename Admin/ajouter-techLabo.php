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
						<li class="breadcrumb-item">Technicien de laboratoire</li>
						<li class="breadcrumb-item active">Ajouter un technicien de laboratoire</li>
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
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="doctor-profile">
										<div class="doctor-thumb">
											<img src="img/user21.png" alt="UI Kits">
										</div>
										<div class="input-group mb-3">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="changeProfile"
													aria-describedby="changeProfile">
												<label class="custom-file-label" for="changeProfile">Modifier l'image</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Informations technicien de laboratoire</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Nom complet</label>
												<input type="text" class="form-control" id="fullName" placeholder="">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="inputEmail">Email</label>
												<input type="email" class="form-control" id="inputEmail" placeholder="">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="education">Qualification</label>
												<input type="text" class="form-control" id="education" placeholder="">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="inputSpeciality">Speciality</label>
												<input type="text" class="form-control" id="inputSpeciality" placeholder="">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="addreSs">Adresse</label>
												<textarea class="form-control" id="addreSs" rows="3" placeholder=""></textarea>
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Biographie</label>
												<textarea class="form-control" id="biO" rows="3" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="text-right">
												<button class="btn btn-primary">Creer un profile</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Creer un compte</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="userName">Nom d'utilisateur</label>
												<input type="text" class="form-control" id="userName" placeholder="">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="password">Mot de passe</label>
												<input type="password" class="form-control" id="password" placeholder="">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="rePassword">Confirmer le mot de passe</label>
												<input type="password" class="form-control" id="rePassword" placeholder="">
											</div>
										</div>
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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>
<?php } ?>