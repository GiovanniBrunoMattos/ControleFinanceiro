<?php

require_once 'Conexao.php';

class UsuarioDAO extends Conexao {

    public function CadastrarUsuario(UsuarioVO $vo) {
        $conexao = parent::getConexao();
        $comando = 'INSERT INTO tb_usuario(nome_usuario, email_usuario, senha_usuario, adm_usuario, status_usuario) VALUES (?, ?, ?, ?, ?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->GetNome()); 
        $sql->bindValue(2, $vo->GetEmail());
        $sql->bindValue(3, $vo->GetSenha());
        $sql->bindValue(4, $vo->GetAdm());
        $sql->bindValue(5, $vo->GetStatus());
        
        try{
            $sql->execute();
            return 'Usuário cadastrado com Sucesso!';
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

}

