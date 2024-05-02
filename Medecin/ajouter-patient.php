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
    	<script src="https://cdn.tailwindcss.com"></script>


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
                            <form id="">
							<div id="example-vertical">
								<h3>Information personelle</h3>
								<section>
									<div class="row gutters">
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="fullName">Prénom</label>
												<input type="text" class="form-control" value="" name="prenom" id="prenom" placeholder="">
                                            </div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="patID">Nom de famille</label>
												<input type="text" class="form-control" value="" name="nom" id="nom" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="agE">Numéro de téléphone</label>
												<input type="text" class="form-control" value="" name="numero" id="numero" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Adresse</label>
												<input type="text" class="form-control" value="" name="adresse" id="adresse" placeholder="">
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="addreSs">Poids</label>
												<input type="text" class="form-control" value="" name="poids" id="poids" rows="3" placeholder="">
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Taille</label>
												<input type="text" class="form-control" value="" name="taille" id="taille" rows="3" placeholder="">
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Id patient</label>
												<input type="text" class="form-control" value="" name="patientid" id="patientid" rows="3" placeholder="">
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
												<input type="text" class="form-control" value="" name="nomUrg" id="nomUrg" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="patID">Nom de famille</label>
												<input type="text" class="form-control" value="" name="prenomUrg" id="prenomUrg" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="agE">Numéro de téléphone</label>
												<input type="text" class="form-control" value="" name="numeroUrg" id="numeroUrg" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Adresse</label>
												<input type="text" class="form-control" value="" name="adresseUrg" id="adresseUrg" placeholder="">
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
														<input class="form-check-input" type="radio" value="oui" name="hepatiteB" id="hepatiteB">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" value="non" name="hepatiteB" id="hepatiteB">
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
														<input class="form-check-input" type="radio" name="varicelle" value="oui" id="varicelle">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="varicelle" value="non" id="varicelle">
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
														<input class="form-check-input" type="radio" name="rougeole" value="oui" id="rougeole">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="rougeole" value="non" id="rougeole">
														<label class="form-check-label" for="inlineRadio2">Non</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="phoNe">Antécédents médicaux importants (chirurgie, blessures, maladie grave) :</label>
												<textarea class="form-control" value="" name="antecedentsMédImp" id="antecedentsMédImp" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="inputEmail">Énumérez tous les problèmes médicaux (asthme, convulsions, maux de tête) :</label>
												<textarea class="form-control" value="" name="problemesMéd" id="problemesMéd" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="addreSs">Énumérez tous les médicaments pris régulièrement :</label>
												<textarea class="form-control" value="" name="medicamentsReg" id="medicamentsReg" rows="3" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="form-group">
												<label for="biO">Énumérez toutes les allergies :</label>
												<textarea class="form-control" value="" name="allergies" id="allergies" rows="3" placeholder=""></textarea>
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
														<input class="form-check-input" type="radio" name="assurance" value="oui" id="assurance">
														<label class="form-check-label" for="inlineRadio1">Oui</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="assurance" value="non" id="assurance">
														<label class="form-check-label" for="inlineRadio2">Non</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="patID">Nom de la compagnie d'assurance :</label>
												<input type="text" class="form-control" value="" name="compagnie" id="compagnie" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="agE">Adresse</label>
												<input type="text" class="form-control" value="" name="AdresseCompagnie" id="AdresseCompagnie" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="phoNe">Numéro de police:</label>
												<input type="text" class="form-control" value="" name="numeroPolice" id="numeroPolice" placeholder="">
											</div>
										</div>
										<div class="col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Date d'expiration</label>
												<input type="text" class="form-control" value="" name="expiration" id="expiration" placeholder="">
											</div>
										</div>
									</div>	
									<input type='button' id='saverecords'  class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg" value ='Soumettre' />
                                </section>
							</form>
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
		<script>
			$('#saverecords').on( 'click', function(){
                    var prenom=$("#prenom").val();
					 var nom=$("#nom").val();
					 var numero=$("#numero").val();
					 var adresse=$("#adresse").val();
					 var poids=$("#poids").val();
					 var taille=$("#taille").val();
					 var nomUrg=$("#nomUrg").val();
					 var prenomUrg=$("#prenomUrg").val();
					 var numeroUrg=$("#numeroUrg").val();
					 var adresseUrg=$("#adresseUrg").val();
					 var hepatiteB=$("#hepatiteB").val();
					 var varicelle=$("#varicelle").val();
					 var rougeole=$("#rougeole").val();
					 var antecedentsMédImp=$("#antecedentsMédImp").val();
					 var problemesMéd=$("#problemesMéd").val();
					 var medicamentsReg=$("#medicamentsReg").val();
					 var allergies=$("#allergies").val();
					 var assurance=$("#assurance").val();
					 var compagnie=$("#compagnie").val();
					 var AdresseCompagnie=$("#AdresseCompagnie").val();
					 var numeroPolice=$("#numeroPolice").val();
					 var expiration=$("#expiration").val();
					 var patientid=$("#patientid").val();
          var url = 'patientInsert.php';

          $.post( url, {prenom:prenom, nom:nom, numero:numero, adresse:adresse, poids:poids, taille:taille, nomUrg:nomUrg, prenomUrg:prenomUrg, numeroUrg:numeroUrg, adresseUrg:adresseUrg, hepatiteB:hepatiteB, varicelle:varicelle, rougeole:rougeole, antecedentsMédImp:antecedentsMédImp, problemesMéd:problemesMéd, medicamentsReg:medicamentsReg, allergies:allergies,assurance:assurance, compagnie:compagnie, AdresseCompagnie:AdresseCompagnie, numeroPolice:numeroPolice, expiration:expiration, patientid:patientid})
          .done(function( data ) {
                $("#saverecords").val('Success');
                toastr.success('Records has been successfully saved');
                setTimeout(function(){
                    window.location.reload(1);
                }, 4500);
            });
       });
		</script>

	</body>

</html>