<?php
require_once 'conexao.class.php';

class usuario{
    private $con;

    private $id;
    private $nome;
    private $senha;

    public function __construct() {
        $this->con = new conexao();
    }

    public function adicionar($nome, $senha) {
        try{
            $this->nome = $nome;
            $this->senha = $senha;
            $sql = $this->con->conectar()->prepare("INSERT INTO usuario(nome, senha) VALUES(:nome, :senha)");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':senha', $senha);
            $sql->execute();
            return TRUE;
        } catch (PDOException $ex) {
            return 'ERRO: ' . $ex->getMessage();
        }
    }

    public function excluir($id){
        $sql = $this->con->conectar()->prepare("DELETE FROM usuario WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function editar($nome, $senha){
        try{
            $sql = $this->con->conectar()->prepare("UPDATE usuario SET nome = :nome, senha = :senha WHERE id = :id");
            $sql->bindValue('nome', $nome);
            $sql->bindValue('senha', $senha);
            $sql->execute();
            return TRUE;
        } catch (PDOException $ex) {
            return 'ERRO: ' . $ex->getMessage();
        }
    }
    
    
public function fazerLogin($nome, $senha){
    try{
    $sql = $this->con->conectar()->prepare("SELECT * FROM usuario WHERE nome = :nome AND senha = :senha");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":senha", $senha);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();

        $_SESSION['logado'] = $sql['id'];
        return TRUE;
    }
    return FALSE;
}catch (PDOException $ex) {
    return 'ERRO: ' . $ex->getMessage();
}
}

public function setUsuario($id){
    try{
    $this->id = $id;
    $sql = $this->con->conectar()->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
} catch (PDOException $ex) {
    return 'ERRO ' . $ex->getMessage();
}
}
}
?>