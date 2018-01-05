<?php
    require_once('vendor/autoload.php');
    require_once('app/classes/google_auth.php');
    require_once('app/init.php');
    
    $googleClient = new Google_Client();
    $auth = new GoogleAuth($googleClient);
    
    if($auth->checkRedirectCode())
    {
//        header('Location: index.php');
    }
    
?>


<html>
<head>
<title>Login Google</title>
<body>
<?php if(!$auth->isLoggedIn()): ?>
		<a href="<?php echo $auth->getAuthUrl();?>">Iniciar Sessao Google</a>
<?php else:?>		
		Bem Vindo ao Google...<a href="Logout.php">Finalizar Sessao Google</a>
<?php endif;?>	
</body>
</head>
</html>