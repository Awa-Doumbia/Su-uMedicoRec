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
		<!-- Steps Wizard CSS -->
		<link rel="stylesheet" href="vendor/wizard/jquery.steps.css" />

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
						<li class="breadcrumb-item active">Ajouter un patient</li>
					</ol>
					<div class="site-award">
						<img src="img/logo.png" alt="Hospital Dashboards">
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">
					<!-- Row start -->
						<div class="col-sm-12">
							<div class="card">
							<div id="example-vertical">
								<h3>Information personelle</h3>
								<section>
									<div class="row gutters">
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="fullName">Prénom</label>
												<input type="text" class="form-control" id="fullName" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="patID">Nom de famille</label>
												<input type="text" class="form-control" id="patID" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="agE">Numéro de téléphone</label>
												<input type="text" class="form-control" id="agE" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="phoNe">Date de naissance</label>
												<input type="text" class="form-control" id="phoNe" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Adresse</label>
												<input type="text" class="form-control" id="inputEmail" placeholder="">
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="addreSs">Poids</label>
												<input type="text" class="form-control" id="addreSs" rows="3" placeholder="">
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Taille</label>
												<input type="text" class="form-control" id="biO" rows="3" placeholder="">
											</div>
										</div>
									</div>
								</section>
								<h3>En cas d'urgence</h3>
								<section>
								<div class="row gutters">
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="fullName">Prénom</label>
												<input type="text" class="form-control" id="fullName" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="patID">Nom de famille</label>
												<input type="text" class="form-control" id="patID" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="agE">Numéro de téléphone</label>
												<input type="text" class="form-control" id="agE" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Adresse</label>
												<input type="text" class="form-control" id="inputEmail" placeholder="">
											</div>
										</div>
									</div>	
								</section>
								<h3>Historique médical général</h3>
								<section>
								<div class="row gutters">
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="fullName">Avez-vous été vacciné contre l'hépatite B?</label>
																
												<div class="">

													<!-- Inline Radios example -->
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
															value="option1">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
															value="option2">
														<label class="form-check-label" for="inlineRadio2">Non</label>
													</div>

												</div>
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group" style="margin-left: 4rem;">
												<label for="patID">Varicelle</label>
												<div class="">
													<!-- Inline Radios example -->
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
															value="option1">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
															value="option2">
														<label class="form-check-label" for="inlineRadio2">Non</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group" style="margin-left: 3rem;">
												<label for="agE">Rougeole</label>
												<div class="">
													<!-- Inline Radios example -->
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
															value="option1">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
															value="option2">
														<label class="form-check-label" for="inlineRadio2">Non</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="phoNe">Antécédents médicaux importants (chirurgie, blessures, maladie grave) :</label>
												<textarea class="form-control" id="phoNe" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="inputEmail">Énumérez tous les problèmes médicaux (asthme, convulsions, maux de tête) :</label>
												<textarea class="form-control" id="inputEmail" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="addreSs">Énumérez tous les médicaments pris régulièrement :</label>
												<textarea class="form-control" id="addreSs" rows="3" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Énumérez toutes les allergies :</label>
												<textarea class="form-control" id="biO" rows="3" placeholder=""></textarea>
											</div>
										</div>
									</div>	
								</section>
								<h3>Assurance médicale</h3>
								<section>
								<div class="row gutters">
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="fullName">Avez-vous une assurance maladie?</label>
												<div class="">
													<!-- Inline Radios example -->
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
															value="option1">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
															value="option2">
														<label class="form-check-label" for="inlineRadio2">Non</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="patID">Nom de la compagnie d'assurance :</label>
												<input type="text" class="form-control" id="patID" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="agE">Adresse</label>
												<input type="text" class="form-control" id="agE" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="phoNe">Numéro de police:</label>
												<input type="text" class="form-control" id="phoNe" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Date d'expiration</label>
												<input type="text" class="form-control" id="inputEmail" placeholder="">
											</div>
										</div>
									</div>	
								</section>
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
		<!-- Steps wizard JS -->
		<script src="vendor/wizard/jquery.steps.min.js"></script>
		<script src="vendor/wizard/jquery.steps.custom.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>