<?php
  if(isset($_POST['voltar'])){
    header("location:./principal.php");
   }  
session_start();
if(!$_SESSION['admin']){
    header("location:../index.php");
}
require_once("../db/Mysql.php");
$mysql = new Mysql();

if (isset($_POST['registrar'])) {
$cadastro = (object)[];
$cadastro->nome = $_POST['nome'];
$cadastro->idade = $_POST['idade'];
$cadastro->tipo = $_POST['tipo'];
$cadastro->sexo = $_POST['sexo'];
$cadastro->descricao = $_POST['descricao'];
$nomeImagem = $_FILES['img']['name'];
$imagem = $_FILES['img']['tmp_name'];
$destinoImagem = "../img/$nomeImagem";
$retorno = move_uploaded_file($imagem,$destinoImagem);
$cadastro->img = $nomeImagem;
$cadastro = $mysql->animaisCadastro($cadastro);
header("location:principal.php");
}

  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cadastro AdotePets</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<form action="" method="post">
     <button name="voltar" type="submit" class="btn-close" aria-label="Close"></button>
</form>

<body class="bg-gradient" style="background-color: #2e2e2e;">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h5 text-gray-900 mb-5"><i class="fa-solid fa-paw"></i> Registrar Animais!</h1>
                            </div>
                            <form class="user" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nome" id="exampleFirstName" placeholder="Nome" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="idade" id="exampleLastName" placeholder="Idade" required>
                                    </div>
                                </div>
                                <div class="form">
                                    <input type="text" class="form-control form-control-user" name="tipo" id="exampleInputEmail" placeholder="Tipo" required>
                                </div>
                                <br>
                                <div class="form">
                                    <input type="text" class="form-control form-control-user" name="descricao" id="exampleInputEmail" placeholder="descricao" required>
                                </div>
                                <br><br>
                                <input type="radio" name="sexo" value="Macho">Macho
                                <br>
                                <input type="radio" name="sexo" value="Femêa">Femêa
                                <br><br>
                                <h3><b>Escolha a foto do pet:<b></h3>
                                <input type="file" name="img">
                                
                                <br><br>
                                <div class="pt-1 mb-4" style="align-items: center;">
                                     <button name="registrar" class="btn btn-secondary" type="submit">Registrar</button>
                                </div>
                           
                        </form>

                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>