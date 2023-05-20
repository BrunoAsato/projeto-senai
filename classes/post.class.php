<?php
include_once 'conexao.class.php';

class post{
    private $con;

    private $id;
    private $id_categoria;
    private $nome;
    private $descricao;

    public function __construct(){
        $this->con = new conexao();
    }

    public function adicionar($nome, $descricao, $id_categoria){
        try{
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->id_categoria = $id_categoria;
            $sql = $this->con->conectar()->prepare("INSERT INTO post(nome, descricao, id_categoria) VALUES (:nome, :descricao, :id_categoria)");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':descricao', $descricao);
            $sql->bindValue(':id_categoria', $id_categoria);
            $sql->execute();
            return TRUE;
        } catch (PDOException $ex) {
            return 'ERRO: ' . $ex->getMessage();
        }
    }

    public function editar($nome, $descricao){
       try{
        $sql = $this->con->conectar()->prepare("UPDATE post SET nome = :nome, descricao = :descricao, id_categoria = :id_categoria WHERE id = :id");
        $sql->bindValue('nome', $nome);
        $sql->bindValue('descricao', $descricao);
        $sql->bindValue('id_categoria', $id_categoria);
        $sql->execute();
        return TRUE;
    } catch (PDOException $ex) {
                return 'ERRO: ' . $ex->getMessage();
            }
    }

    public function excluir($id){
        $sql = $this->con->conectar()->prepare("DELETE FROM post WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return TRUE;
    }
    
    public function listar() {
        try{
            $sql = $this->con->conectar()->prepare("SELECT * FROM post");
            $sql->execute();
            return $sql->fetchAll();
        }catch (PDOException $ex){
            return 'ERRO: '. $ex->getMessage();
        }
    }
}