<?php
    require_once('vendor/autoload.php');
    require_once('app/classes/google_auth.php');
    require_once('app/init.php');
    
    $googleClient = new Google_Client();
    $auth = new GoogleAuth($googleClient);
    
    if($auth->checkRedirectCode())
    {
        header('Location: index.php');
    }
    
?>


<html>
<head>
<style type="text/css">
h1
{
font-family:Arial, Helvetica, sans-serif;
color:#999999;
}
.wrapper{width:600px; margin-left:auto;margin-right:auto;}
.bemvindo_txt{
	margin: 20px;
	background-color: #EBEBEB;
	padding: 10px;
	border: #D6D6D6 solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.google_box{
	margin: 20px;
	background-color: #FFF0DD;
	padding: 10px;
	border: #F7CFCF solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.google_box .image{ text-align:center;}
</style>
<title>Login Google</title>
<body>
<?php if(!$auth->isLoggedIn()): ?>
		<a href="<?php echo $auth->getAuthUrl();?>">Iniciar Sessao Google</a>
<?php else:?>		
		
		<h1>Google Profile</h1>
    <?php
    echo '<div class="bemvindo_txt">Bem Vindo <b>'.$_SESSION['user']['name'].'</b></div>';
    echo '<div class="google_box">';
    echo '<p class="image"><img src="'.$_SESSION['user']['picture'].'" alt="" width="300" height="220"/></p>';
    echo '<p><b>Nome : </b>' . $_SESSION['user']['name'].'</p>';
    echo '<p><b>Email : </b>' . $_SESSION['user']['email'].'</p>';
    echo '<p><b>Regiao : </b>' . $_SESSION['user']['locale'].'</p>';
    echo '<p><b>Voce esta Logado no  : </b>Google</p>';
    echo '</div>';	
    ?>
	<a href="Logout.php">Finalizar Sessao Google</a>
<?php endif;?>	
</body>
</head>
</html>