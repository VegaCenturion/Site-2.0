<title>Confirmação</title>
<style>
    body{
            background-image: url(https://images4.alphacoders.com/689/thumb-1920-689705.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
</style>
<body></body>

<?php

	$username = $_POST ["username"];
	$email = $_POST ["email"];
	$senha = $_POST ["senha"];


	$f=fopen("bd.csv","r");
	$confirmacao = 1;
	$dados = fgetcsv($f);
	while($dados)
	{
		if(($dados[0]==$username)&&($dados[0]==$email)&&($senha==$dados[1]))
		{
			$confirmacao=0;
			break;
		}
		$dados=fgetcsv($f);
	}
	fclose($f);

    if($confirmacao == 0)
	{
		session_start();		
		$_SESSION["username$username"]=$username;
		echo "<script>alert('Conectado com sucesso.');.href=\"SApostas.html\";</script>";
	}
	else
	{
        echo "<script>alert('Usuário ou senha estão errados.');.href=\"SApostas.html\";</script>";
	}
?>