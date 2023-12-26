<?php 

class Mysql{
    
 public $conn;

public function __construct()
{
    $this->conn = new PDO("mysql:dbname=adotePets;host=localhost", "root","");
}
public function cadastroUsuario($cadastro)
{
    if($cadastro->senha != $cadastro->confirmar_senha){
        return false;
    }
    $stmt=$this->conn->prepare("INSERT INTO usuariosCadastro(nome,sobrenome,email,senha,confirmar_senha,admin) VALUES(?,?,?,?,?,?)");
    $stmt->execute([$cadastro->nome,$cadastro->sobrenome,$cadastro->email,$cadastro->senha,$cadastro->confirmar_senha,$cadastro->admin]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
public function login($email, $senha)
{
    $stmt = $this->conn->prepare("SELECT * FROM usuariosCadastro WHERE email = ?");
    $stmt->execute([$email]);
    if($stmt->rowCount() == 0) return false;
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    if(password_verify($senha, $usuario['senha'])){
        return $usuario;
    }
    else return false;
}
public function animaisCadastro($cadastro){
    $stmt=$this->conn->prepare("INSERT INTO animais(nome,idade,sexo,tipo,img,descricao) VALUES(?,?,?,?,?,?)");
    $stmt->execute([$cadastro->nome,$cadastro->idade,$cadastro->sexo,$cadastro->tipo,$cadastro->img,$cadastro->descricao]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function buscarAnimais(){
    $stmt = $this->conn->prepare("SELECT * FROM animais");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
public function buscarAnimalId($id){
    $stmt = $this->conn->prepare("SELECT * FROM animais WHERE id = ?");
    $stmt->execute([$id]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results[0];
}
public function animalUpdate($animal){
    $stmt = $this->conn->prepare("UPDATE animais SET nome=?,idade=?,sexo=?,tipo=?,descricao=?,img=? WHERE id=?");
    $stmt->execute([$animal->nome,$animal->idade,$animal->sexo,$animal->tipo,$animal->descricao,$animal->img,$animal->id]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
}   
public function deleteAnimal($delete){
    $stmt = $this->conn->prepare("DELETE FROM animais WHERE id=?");
    $stmt->execute([$delete]);
}
}
?>