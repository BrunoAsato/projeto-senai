<?php
include_once 'conexao.class.php';

class categoria{
    private $con;
    private $id_categoria;
    private $nome;

    public function __construct(){
        $this->con = new conexao();
    }

    public function adicionar($nome){
        try{
        $this->nome = $nome;
        $sql = $this->con->conectar()->prepare("INSERT INTO  categoria(nome) VALUES (:nome)");
        $sql->bindValue(':nome', $nome);
        $sql->execute();
        return TRUE;
    }catch (PDOException $ex) {
        return 'ERRO: ' . $ex->getMessage();
    } 
}

    public function editar($nome){
        try{
            $sql = $this->con->conectar()->prepare("UPDATE categoria SET nome = :nome  WHERE id_categoria = :id_categoria");
            $sql->bindValue(':nome', $nome);
            $sql->execute();
            return TRUE;
        } catch (PDOException $ex) {
            return 'ERRO: ' . $ex->getMessage();
        }
    }

    public function excluir($id_categoria){
        $sql = $this->con->concectar()->prepare("DELETE FROM categoria WHERE id_categoria = :id_categoria");
        $sql->bindValue(':id_categoria', $id_categoria);
        $sql->execute();
        return TRUE;
    }

    public function listar(){
        try{
            $sql = $this->con->conectar()->prepare("SELECT id_categoria, nome FROM categoria");
            $sql->execute();
            return $sql->fetchAll();
        }catch (PDOException $ex){
            return 'ERRO: '. $ex->getMessage();
        }
    }
}