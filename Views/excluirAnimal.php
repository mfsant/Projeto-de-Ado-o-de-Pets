<?php
require_once("../db/Mysql.php");
$mysql = new Mysql();
$animalId = $_POST['animal_id'];
$animal = $mysql->buscarAnimalId($animalId);

if(isset($_POST['excluir'])){
    if(file_exists("../img/$animal->img")){
        unlink("../img/$animal->img");
        $mysql->deleteAnimal($animalId);
        
        header("location:principal.php");
    }
}
?>