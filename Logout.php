<?php
 require_once('app/init.php');
 require_once('app/classes/google_auth.php');
 
 $auth = new GoogleAuth();
 $auth->Logout();
 header('Location: index.php');
?>