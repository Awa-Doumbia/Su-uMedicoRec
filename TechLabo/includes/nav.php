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
						<li class="nav-item">
							<a class="nav-link <?php echo ($token == 'ajouter-resutat-test.php') ? 'active-page' : ''; ?>" href="index.php">
								<i class="icon-devices_other nav-icon"></i>
								Dashboard
							</a>
						</li>
					</ul>
				</div>
			</nav>