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
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link <?php echo ($token == 'index.php') ? 'active-page' : ''; ?>" href="http://127.0.0.1:8000/">
								<i class="icon-devices_other nav-icon"></i>
								Dashboard
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php echo ($token == 'dossier-medical.php' || $token == 'patients.php' || $token == 'ajouter-patient.php') ? 'active-page' : ''; ?>" href="#" id="patient" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Patients
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item" href="patients.php">Départements</a>
								</li>
								<li>
									<a class="dropdown-item" href="ajouter-patient.php">Ajouter un patient</a>
								</li>
							</ul>
						</li>
					</ul>
			</nav>