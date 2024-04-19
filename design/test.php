<?php
$args = $_SERVER["REQUEST_URI"];
$arg_arr = explode("/",$args);
$token = $arg_arr[3];
if ($token=='ajouter-infirmier.php') {
    $activepage=$token;
}elseif ($token=='ajouter-medecin.php') {
    $activepage=$token;
}elseif ($token=='ajouter-patient.php') {
    $activepage=$token;
}elseif ($token=='ajouter-techLabo.php') {
    $activepage=$token;
}elseif ($token=='dossier-medical.php') {
    $activepage=$token;
}elseif ($token=='list-corp-medical.php') {
    $activepage=$token;
}elseif ($token=='patients.php') {
    $activepage=$token;
}
?>
