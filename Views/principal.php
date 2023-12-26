<?php 
require_once("../db/Mysql.php");
$mysql = new Mysql();
$animais = $mysql->buscarAnimais();

session_start();
if(!$_SESSION['logado']){
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AdotePetz</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">AdotePetz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Sair</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
    
    <body>
  
<body>
<body class="bg-gradient" style="background-color: #2e2e2e;">
<br>
<h5><i class="fa-solid fa-paw"></i> Seja bem vindo(a), <?= $_SESSION['nome']; ?></h5>
<hr>
<?php if($_SESSION['admin']):?>
                          <form method="post" action="cadastroAnimais.php">
                          <input type="hidden" name="animal_id" value="<?=$animal['id']?>">
                      <button name="cadastrar" type="submit" class="btn btn-secondary" aria-label="Close">Cadastrar Animais</button>
                          </form>
                       <?php endif; ?>
                       <br>
</div>
    </div>
    <div class="col"></div>
    </div>
    </section>
    <section class="receitas">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-10">
                <div class="row">
                 <?php if(count($animais) > 0) : ?>
                  <?php foreach ($animais as $animal) : ?>
                    <div class="col-3">
                    <div class="card" style="width: 18rem;">
                      <img src="../img/<?= $animal['img'] ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $animal['nome'] ?></h5>
                        <p class="card-text"><?= $animal['sexo'] ?></p>
                        <a href="adocao.php?id=<?= $animal['id'] ?>" class="btn btn-secondary"><i class="fa-solid fa-paw"></i> Adotar</a>
                        <br><br>
                        <?php if($_SESSION['admin']): ?>
                        <a href="editar.php?id=<?= $animal['id'] ?>" class="btn btn-secondary">Editar</a>
                        <br><br>
                        <?php endif; ?>
                        <?php if($_SESSION['admin']):?>
                          <form method="post" action="excluirAnimal.php">
                          <input type="hidden" name="animal_id" value="<?=$animal['id']?>">
                      <button name="excluir" type="submit" class="btn btn-secondary" aria-label="Close">Excluir</button>
                          </form>
                       <?php endif; ?>
                       <br>
                      
                      </div>
                    </div>
                    </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                       
                </div>
            </div>
            <div class="col"></div>
        </div>

    </section>

    </form>
    
</div>
<hr>
</body>
 <!-- Footer-->
 <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">AdotePets &copy;  2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>