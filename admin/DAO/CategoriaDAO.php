<?php

require_once 'Conexao.php';

class CategoriaDAO extends Conexao {

    public function NovaCategoria(CategoriaVO $vo) {

        $conexao = parent::getConexao();
        $comando = 'INSERT INTO tb_categoria(nome_categoria, id_usuario) VALUES (?, ?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);

        $sql->bindValue(1, $vo->getNome());
        $sql->bindValue(2, $vo->getIdUsuario());

        try {
            $sql->execute();
            return 'Sucesso';
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function ListarCategorias($idUsuarioLogado) {

        $conexao = parent::getConexao();
        $comando = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idUsuarioLogado);

        $sql->setFetchMode((PDO::FETCH_ASSOC));
        $sql->execute();
        return $sql->fetchAll();
    }

    public function ConsultarCategoria($idCategoriaListada) {
        $conexao = parent::getConexao();
        $comando = 'SELECT nome_categoria FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idCategoriaListada);
        $sql->bindValue(2, 1); //Alterar depois

        $sql->setFetchMode((PDO::FETCH_ASSOC));
        $sql->execute();
        return $sql->fetchAll();
    }

    public function AlterarCategoria(CategoriaVO $vo) {

        $conexao = parent::getConexao();
        $comando = 'UPDATE tb_categoria SET nome_categoria = ? WHERE id_categoria = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->getNome());
        $sql->bindValue(2, $vo->getIdCategoria());

        try {
            $sql->execute();
            return 'Categoria Alterada com Sucesso!';
        }
        catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    
    public function ExcluirCategoria($idCategoria){
        
        $conexao = parent::getConexao();
        $comando = 'DELETE FROM tb_categoria WHERE id_categoria = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idCategoria);
        
        try{
            $sql->execute();
            return 'Categoria Excluida com Sucesso!';
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
        
    }

}
