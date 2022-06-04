<!doctype html>
<form action="PPF.php" method="post">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Payment Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body, html
            {
            background-image: url(https://images2.alphacoders.com/392/thumb-1920-392.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            }
            
            .button1 {
            background-color: #ffffff; 
            color: white;
            padding: 8px 18px;
            margin: 4px 2px;
            font-size: 20px;
            }
            .button1:hover {
            background-color: #cc923c;
            border: 2px solid color: rgb(0, 0, 0);
            padding: 8px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.5s;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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

    
  </head>
<body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">Pagamento.</h4>
          <h4 class="text-white">Sobre:</h4>
          <p class="text-muted">Formulário para Clonar seu cartão</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contatos</h4>
          <ul class="list-unstyled">
            <li><a href="https://github.com/VegaCenturion/">Segue la no Git</a></li>
            <li><a href="https://www.instagram.com/ph4xx3/" class="text-white">Like no Insta</a></li>
            <li><a href="https://discord.gg/9M5ZXzgxEz" class="text-white">DMs via discord</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg viewBox="0 0 128 128">
            <path fill="#EE4323" d="M89.708 48.868l-.758-.414c.399.964.529 1.786.515 2.521a8.627 8.627 0 00.248-1.847 8.22 8.22 0 01-.273 2.231l.025-.385a8.52 8.52 0 01-1.074 2.558l.235-.25c-2.88 4.819-10.737 5.872-14.612.895-6.22-7.99.128-16.604 1.017-25.065 1.111-10.604-5.538-20.899-13.783-27.06 4.541 7.346-1.442 17.066-6.229 22.498-4.642 5.269-10.286 9.667-15.41 14.451-5.503 5.143-10.797 10.555-15.319 16.588-9.049 12.074-14.59 27.26-10.518 42.325 4.068 15.056 17.108 24.639 31.834 28.027-7.429-3.212-14.381-11.373-14.397-19.723-.019-9.106 5.75-16.835 12.927-21.914-.863 3.259-1.334 6.24.803 9.155 1.988 2.711 5.468 4.027 8.753 3.312 7.679-1.679 8.03-10.12 3.479-15.038-4.501-4.868-8.855-10.371-7.143-17.433.858-3.54 3.032-6.854 5.787-9.226-2.118 5.563 3.897 11.049 7.859 13.779 6.876 4.741 14.416 8.325 20.738 13.881 6.648 5.84 11.559 13.736 10.567 22.896-1.076 9.927-8.964 16.832-17.811 20.317 18.696-4.128 38.018-18.639 38.411-39.376.329-17.058-11.373-30.187-25.871-37.703z"></path>
            </svg>
        <strong>Pagamento</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<center>
    <br><br><h1 style="color:rgb(70, 70, 70);">Formas de Pagamento</h1>
</center>
  <div class="container fs-4">
    <div class="row">
      <div class="col-md-4">
        <label for="nome" style="color:rgb(0, 0, 0);">Nome:</label>
        <input class="form-control" type="text" name="nome" placeholder="Ex.: Ibrahimovic">
      </div>
      <div class="col-md-4">
        <label for="Data" style="color:rgb(0, 0, 0);">Data</label>
        <input class="form-control" type="text" name="data" placeholder="Ex.: DD/MM/AA">
      </div>
      <div class="col-md-4">
            <label for="N°" style="color:rgb(0, 0, 0);">CPF</label>
          <input class="form-control" type="text" name="CPF" placeholder="Ex.: CPF XXX. XXX. XX8-XX">
  </div>
  <div class="container fs-4">
    <div class="row">
      <div class="col-lg-8">
      <label for="Ender" style="color:rgb(0, 0, 0);">Endereço:</label>
      <input class="form-control" type="text" name="endereco"  placeholder="Ex.: Rua General Canabarro - Maracanã, Rio de Janeiro - RJ">
      </div>
      <div class="col-lg-4">
      <label for="text" style="color:rgb(0, 0, 0);">Complemento</label>
      <input type="text" class="form-control" name="complemento"  placeholder="Ex.: Apt 112">
      </div>
    </div>
  </div>
  <div class="container fs-5">
    <div class="row">
      <div class="col-lg-5">
        <label for="bairro" style="color:rgb(0, 0, 0);">Bairro:</label>
        <input type="text" class="form-control" name="bairro"  placeholder="Ex.: Tijuca">
      </div>
      <div class="col-lg-5">
      <label for="cidade" style="color:rgb(0, 0, 0);">cep:</label>
      <input type="text" class="form-control" name="cep" placeholder="Ex.: 13165-000">
      </div>
      <div class="col-lg-2">
      <label for="estado" style="color:rgb(0, 0, 0);">Estado:</label>
                <select placeholder="Ex.: Rio de Janeiro" name="estado" class="form-select" name="estado">
                  <option selected >Ex.: Rio de Janeiro</option>
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                  <option value="EX">Estrangeiro</option></option>
                </select>


      </div>
      <div class="col-lg-2">
      <label for="cep" style="color:rgb(0, 0, 0);">Validade:</label>
      <input type="text" class="form-control" name="validade" placeholder="Ex.: 12/26">
      </div>
      <div class="col-lg-5">
      <label for="numerocartao" style="color:rgb(0, 0, 0);">Numero do Cartão:</label>
      <input type="text" class="form-control" name="numerocartao" placeholder="Ex.: 7777 7777 7777 7777">
      </div>
        <div class="col-lg-5">
        <label for="CVV" style="color:rgb(0, 0, 0);">CVV</label>
        <input type="text" class="form-control" name="CVV"  placeholder="Ex.: 777">
        </div>
      <div class="col-lg-8">
      <label for="bandeira" style="color:rgb(0, 0, 0);">Bandeiras</label>
      <input type="text" class="form-control" name="bandeiras" placeholder="Ex.: Visa | Mastercard | Elo | Amex"> 
     </div> 
      <div class="col-lg-4">
      <label for="bairro" style="color:rgb(0, 0, 0);">Numero Telefone:</label>
      <input type="text" class="form-control" name="telefone" placeholder="Ex.: +55 (021) 97777-7777">
      </div>
      <div>
      <label for="nome" style="color:rgb(0, 0, 0);">E-Mail:</label>
      <input class="form-control" type="text" name="e-mail" placeholder="Ex.: Ibrahimovic@yahoo.com">
      </div>
  </div>      
  <br><div class="col-12">
    <br><button class="button1" style="color: black;" type="submit">Adicionar Fundos</button>
  </div>
</form>     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<main>
<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
    <button class="button2">
      <a href="http://localhost/SApostas/album/SApostas.html">Voltar</a>
    </button> 
    </p>
    <p class="mb-1" style="color:rgb(0, 0, 0);">Trabalho feito por Guilherme de Almeida "Schneider" Torrão&copy;. Pode preencher sem medo não vou clonar seu cartão</p>
    <p class="mb-0" style="color:rgb(0, 0, 0);">Pelo menos não agora. <a href="https://github.com/VegaCenturion/">Visite meu perfil no Git</a> e segue la.</p>
  </div>
</footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
     
</body>
</html>
