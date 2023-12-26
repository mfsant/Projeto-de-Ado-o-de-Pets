<?php

if(isset($_POST['voltar'])){
    header("location:./principal.php");
   } 

require_once("../db/Mysql.php");
$mysql = new Mysql();


if(isset($_POST['voltar'])){
    header("location:../index.php");
   }  
if(isset($_POST['registrarConta']))
{
    if($_POST['senha'] != $_POST['confirmar_senha']){
    echo "<script>alert('Senhas não são iguais!');</script>";
    }else{
        $cadastro = (object)[];
        $cadastro->nome = $_POST['nome'];
        $cadastro->sobrenome = $_POST['sobrenome'];
        $cadastro->email = $_POST['email'];
        $cadastro->senha = $_POST['senha'];
        $cadastro->confirmar_senha = $_POST['confirmar_senha'];
        $cadastro->senha = password_hash($cadastro->senha, PASSWORD_BCRYPT);
        $cadastro->confirmar_senha = password_hash($cadastro->confirmar_senha, PASSWORD_BCRYPT);
        $cadastro = $mysql->cadastroUsuario($cadastro);
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<form action="" method="post">
     <button name="voltar" type="submit" class="btn-close" aria-label="Close"></button>
</form>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro AdotePets</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient" style="background-color: #2e2e2e;">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="https://agenciacrie.com.br/redefamilia/wp-content/uploads/2018/10/3-dog.jpg" alt="" height="100%" width="100%">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h3 class="h5 text-gray-900 mb-5"><i class="fa-solid fa-paw"></i> Criar Conta</h3>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nome" id="exampleFirstName"
                                            placeholder="Nome" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="sobrenome" id="exampleLastName"
                                            placeholder="Sobrenome" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                        placeholder="Email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="senha"
                                            id="exampleInputPassword" placeholder="Senha" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="confirmar_senha"
                                            id="exampleRepeatPassword" placeholder="Confirme a senha" required>
                                            <br><br>
                                    </div>
                                    <div class="pt-1 mb-4">
                                   <button name="registrarConta" class="btn btn-secondary btn-user btn-block" type="submit">Registrar Conta</button>
                                   </div>
                                <hr>
                                <br>
                
                            </form>

                        </div>
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