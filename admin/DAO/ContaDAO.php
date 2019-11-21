<?php

require_once 'Conexao.php';

class ContaDAO extends Conexao{
    
    public function CadastrarConta(ContaVO $vo){
        
        $conexao = parent::getConexao();
        $comando = 'INSERT INTO tb_conta (agencia_conta, numero_conta, valor_conta, id_usuario, id_banco) VALUES (?, ?, ?, ?, ?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->GetAgencia());
        $sql->bindValue(2, $vo->GetNumero());
        $sql->bindValue(3, $vo->GetValor());
        $sql->bindValue(4, $vo->GetIdUsuario());
        $sql->bindValue(5, $vo->GetIdBanco());
        
        
        try{
            $sql-> execute();
            return 'Sucesso';
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
     
        
    }
    
}