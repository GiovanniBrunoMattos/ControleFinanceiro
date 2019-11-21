<?php

require_once 'Conexao.php';

class BancoDAO extends Conexao{
    
    public function CadastrarBanco(BancoVO $vo){
        
        $conexao = parent::getConexao();
        $comando = 'INSERT INTO tb_banco (nome_banco, id_usuario) VALUES (?,?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->GetNome());
        $sql->bindValue(2, $vo->GetIdUsuario());
        
        try{
            $sql->execute();
            return 'Sucesso';
        } catch (Exception $ex) {
            return $ex->getMessage();
        }      
                      
    }
    
    public function ListarBancos($idUsuarioLogado){
        
        $conexao = parent::getConexao();
        $comando = 'SELECT id_banco, nome_banco FROM tb_banco WHERE id_usuario = ? ';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idUsuarioLogado);
        
        $sql->setFetchMode((PDO::FETCH_ASSOC));
        $sql->execute();
        return $sql->fetchAll();        
    } 
    
    public function ConsultarBanco($idBancoListado){
        
        $conexao = parent::getConexao();
        $comando = 'SELECT nome_banco FROM tb_banco WHERE id_banco = ? AND id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idBancoListado);
        $sql->bindValue(2, 1); // alterar depois
        
        $sql->setFetchMode((PDO::FETCH_ASSOC));
        $sql->execute();
        return $sql->fetchAll();
    }
    
    public function AlterarBanco(BancoVO $vo){
        
        $conexao = parent::getConexao();
        $comando = 'UPDATE tb_banco SET nome_banco = ? WHERE id_banco = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->GetNome());
        $sql->bindValue(2, $vo->GetIdBanco());
        
        try {
            $sql->execute();
            return 'Banco Alterado com Sucesso';
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
            
    }
    
    public function ExcluirBanco($idBanco){
        
        $conexao = parent::getConexao();
        $comando = 'DELETE FROM tb_banco WHERE id_banco = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idBanco);
        
        try {
            $sql->execute();
            return 'Banco Excluido com Sucesso!';
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
                   
    }
       
    
    
}