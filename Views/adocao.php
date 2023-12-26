<?php
require_once("../db/Mysql.php");
$mysql = new Mysql();
$id = $_GET['id'];
$animal = $mysql->buscarAnimalId($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoção</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    
    h6{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  
    color: dodgerblue;
    text-align: center;
    }
    p{
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
    }
    
  </style>
</head>

<body>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="../index.php">AdotePetz</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="./principal.php">Sair</a></li>

          <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </nav>
  <!-- Header - set the background image for the header in the line below-->
  <hr><br>

  <body>

    <body class="bg-gradient" style="background-color: #2e2e2e;">

      <body>
      
        <div class="row">
          <div class="col-2">
            <div class="card text-center" style="width: 18rem;">
              <img src="../img/<?= $animal['img'] ?>" class="card-img-top" alt="..." height="300vh" width="300vh">
              <div class="card-body">
                <h5 class="card-title"><?= $animal['nome'] ?></h5>
                <p class="card-text"><?= $animal['descricao'] ?></p>
                <a href="https://forms.gle/LuAuwvnWS4bQoLBN8" class="btn btn-secondary"><i class="fa-solid fa-paw"></i> Adotar</a>
              </div>
            </div>
          </div>
          <div class="col-1"></div>
          <div class="col-8">
          <h6><i class="fa-solid fa-paw"></i> Tudo que você precisa saber para adotar</h6>
          <p>Para garantir a segurança e conforto dos petz,<br> seguimos todas as regras e políticas de adoção responsável.<br> Confira informações essenciais para adotar na AdotePetz.</p>
          <br>
          <h6><i class="fa-solid fa-shield"></i> Proteger saídas e rotas de fuga</h6>
          <p>Apartamentos e casas precisam ter redes de proteção em todas as janelas,<br> vitrôs, basculantes, sacadas e portões para impedir o acesso do gatinho a rua ou telhados.<br> Lembre-se que isso precisa ser feito antes da chegada do gatinho.</p>
          <br>
          <h6><i class="fa-solid fa-credit-card"></i> Ter condições financeiras</h6>
          <p>Este ponto é de extrema importância para garantir a qualidade de vida do gatinho:<br> é preciso ter condições financeiras para arcar com ração de boa qualidade,<br> vacinas e consultas regulares com veterinário.</p>
          <br>
          <h6><i class="fa-regular fa-handshake"></i> Compromisso a Longo Prazo</h6>
          <p>Animais de estimação exigem cuidados constantes e atenção a longo prazo.<br> Considere a expectativa de vida do animal e esteja preparado para assumir esse compromisso.</p>
          <br>
          <h6><i class="fa-solid fa-clock"></i> Tempo para Dedicação</h6>
          <p>Animais de estimação precisam de tempo e atenção.<br> Certifique-se de que você pode dedicar tempo suficiente para brincar, treinar e interagir com seu pet.</p>
          <br><br>
          <p>Adotar um pet é uma experiência gratificante, mas requer reflexão cuidadosa e planejamento.<br> Certifique-se de estar pronto para assumir os compromissos necessários para garantir uma vida feliz e saudável<br> para o seu novo amigo peludo.</p>
        </div>
        </div>

        
        <br>

        <hr><br>
      </body>
    </body>

</html>

</html>
<!-- Footer-->
<br>
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">AdotePets &copy; 2023</p>
  </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>