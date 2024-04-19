<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once 'PHPMailer/vendor/autoload.php';
require 'PHPMailer/vendor/phpmailer/phpmailer/src/Exception.php';
require 'PHPMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'PHPMailer/vendor/phpmailer/phpmailer/src/SMTP.php';
session_start();
error_reporting(0);
include('includes/db.php');

$errorMessage = ""; // Initialize an empty error message

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $passwordd = $_POST['password'];
    $password = hash('sha256', $passwordd);
    $sth = $dbconn->prepare('SELECT id FROM login WHERE login=:email AND password=:password');
    $sth->bindParam(':email', $email);
    $sth->bindParam(':password', $password);
    $sth->execute();
    /* Fetch first row of the result set */
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    if($result) {
        $token = bin2hex(random_bytes(3));
		$stmt= $dbconn->prepare('INSERT into twofa ( email, token) values (?, ?)');
      	$stmt->execute(array($_POST['email'],$token));
    
      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Username     = 'hardsecur2.0@gmail.com';
      $mail->Password     = 'eaoy viem theh gvnw';
      $mail->Port = 465;
            
       $link = 'http://localhost/Su%C3%B1uMedicoRec/Admin/twoFA/' . $token;
	   
    
       $message ="
	   Cher utilisateur,<br/>

	   Vous avez récemment tenté de vous connecter à votre compte. 
	   Pour finaliser le processus de connexion, veuillez cliquez sur le lien suivant :";
    
    
       $mail->setFrom('hardsecur2.0@gmail.com', "SunuMedicoRec");
       $mail->addAddress($email);
       $mail->isHTML(true);
       $mail->Subject = "Token d'authentification";
       $mail->Body = "
       <html>
       <head>
         <title></title>
       </head>
         <body>
         <table align=\"center\" style=\"background-color:#fff;width:80%;min-height:400px;\">
         
        <tr>
             <td class=\"header\">
                 <h2>
                   <span style=\"color:#029053;\">
				   SuñuMedicoRec
                   </span><br/>La confiance médicale numérisée
                 </h2>
				 
             </td>
         </tr>
         <tr>
           <td>
           " . $message . "
           </td>
         </tr>
         <tr>
           <td>
           <a href='" . $link . "' style=\"background-color:#55aaff;padding:10px;text-decoration:none;color:white\">
           <span style=\"font-size:19px;\"> Connectez-vous à votre compte </span>
           </a><br/>
           </td>
         </tr>
         <tr>
           <td>
           <br/>Cordialement,<br/><strong>SuñuMedicoRec</strong>
           </td>
         </tr>
       </table>
       </html>";
       $mail->Send();
       $mail->SMTPDebug  = 4;
     echo'<div class="alert-success" role="alert">
	 <i class="icon-check_circle"></i>Veuillez vérifier votre boîte de réception de courrier électronique pour votre lien de connexion. N oubliez pas de vérifier votre dossier de courriers indésirables.
 </div>';
    } else {
        $errorMessage = "Invalid email or password"; // Set error message
    }
}
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
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">

			<form method="POST">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									SuñuMedicoRec
								</a>
								<h5>Veuiller vous connecter à votre compte.</h5>
								<div class="form-group">
									<input type="email" id="email" class="form-control" placeholder="Address e-mail" name="email" required/>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password" required/>
								</div>
         				       <p class="error password-error" style="color: red;"><?php echo $errorMessage; ?></p>
								<div class="actions">
									<a href="forgot-pwd.html">Oublier ?</a>
									<button type="submit" id="btn" name="login" class="btn btn-info">Se connecter</button>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>

</html>