<?php
	if($confirmacao)
	{
		session_start();		
		$_SESSION["usuario"]=$usuario;
		header("location:pag1.php");
	}
	else
	{
		// redirecionamento (Redirect)
		header("location:login.html");
	}
	session_start();
	$usuario=$_SESSION["usuario"];
	if(!$usuario)
	{
		header("location:login.html");
		die;
	}
	
	echo "oi ... {$usuario}";
	
?>


<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>