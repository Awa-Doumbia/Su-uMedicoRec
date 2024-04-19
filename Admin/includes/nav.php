<?php
$args = $_SERVER["REQUEST_URI"];
$arg_arr = explode("/",$args);
$token = $arg_arr[3];

?>
<nav class="navbar navbar-expand-lg custom-navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar"
					aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php echo ($token == 'list-corps-medical.php' || $token == 'ajouter-medecin.php') ? 'active-page' : ''; ?>" href="#" id="medecin" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Medecin
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item" href="list-corps-medical.php">Départements</a>
								</li>
								<li>
									<a class="dropdown-item" href="ajouter-medecin.php">Ajouter un médecin</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php echo ($token == 'ajouter-infirmier.php') ? 'active-page' : ''; ?>" href="#" id="infirmier" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Infirmier
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item" href="list-corps-medical.php">Départements</a>
								</li>
								<li>
									<a class="dropdown-item" href="ajouter-infirmier.php">Ajouter un Infirmier</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php echo ($token == 'ajouter-techLabo.php') ? 'active-page' : ''; ?>" href="#" id="techLabo" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Technicien de labo
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item" href="list-corps-medical.php">Départements</a>
								</li>
								<li>
									<a class="dropdown-item" href="ajouter-techLabo.php">Ajouter un Technicien de labo</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>