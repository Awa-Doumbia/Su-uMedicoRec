<?php
session_start();
error_reporting(0);
include('includes/db.php');

$req = $dbconn->prepare('SELECT * FROM twofa where token=:token');
$args = $_SERVER["REQUEST_URI"];
$arg_arr = explode("/",$args);
$req->execute(['token' => $arg_arr[4] ]);
$user = $req->fetch();

if(!empty($user))
{
    $req2= $dbconn->prepare('DELETE from twofa WHERE email = ?');
    $req2->execute([$user['email'] ]); 
    
    $sth = $dbconn->prepare('SELECT id FROM login WHERE login= ?');
    $sth->execute([$user['email'] ]);
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user_country'] = $result['id'];
    header('Location: ../patients.php');
    exit;
}
else
{
    header('Location: ../login.php');
}
?>
