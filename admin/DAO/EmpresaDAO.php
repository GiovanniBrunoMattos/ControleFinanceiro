<?php

require_once 'Conexao.php';

class EmpresaDAO extends Conexao {

    public function CadastrarEmpresa(EmpresaVO $vo) {
        $conexao = parent::getConexao();
        $comando = 'INSERT INTO tb_empresa(nome_empresa, endereco_empresa, telefone_empresa, id_usuario) VALUES (?, ?, ?, ?)';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->GetNome());
        $sql->bindValue(2, $vo->GetEndereco());
        $sql->bindValue(3, $vo->GetTelefone());
        $sql->bindValue(4, $vo->GetIdUsuario());

        try {
            $sql->execute();
            return 'Sucesso';
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function ListarEmpresas($idUsuarioLogado) {
        $conexao = parent::getConexao();
        $comando = 'SELECT id_empresa, nome_empresa, endereco_empresa, telefone_empresa FROM tb_empresa WHERE id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idUsuarioLogado);

        $sql->setFetchMode((PDO::FETCH_ASSOC));
        $sql->execute();
        return $sql->fetchAll();
    }

    public function ConsultarEmpresa($idEmpresaListada) {
        $conexao = parent::getConexao();
        $comando = 'SELECT nome_empresa, endereco_empresa, telefone_empresa FROM tb_empresa WHERE id_empresa = ? AND id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idEmpresaListada);
        $sql->bindValue(2, 1); //Alterar Depois

        $sql->setFetchMode((PDO::FETCH_ASSOC));
        $sql->execute();
        return $sql->fetchAll();
    }

    public function AlterarEmpresa(EmpresaVO $vo) {
        $conexao = parent::getConexao();
        $comando = 'UPDATE tb_empresa SET nome_empresa = ?, endereco_empresa = ?, telefone_empresa = ? WHERE id_empresa = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $vo->GetNome());
        $sql->bindValue(2, $vo->GetEndereco());
        $sql->bindValue(3, $vo->GetTelefone());
        $sql->bindValue(4, $vo->GetIdEmpresa());

        try {
            $sql->execute();
            return 'Empresa Alterada com Sucesso';
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function ExcluirEmpresa($idEmpresa){
        $conexao = parent::getConexao();
        $comando = 'DELETE FROM tb_empresa WHERE id_empresa = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando);
        $sql->bindValue(1, $idEmpresa);
        
        try {
            $sql->execute();
            return 'Empresa Excluida com Sucesso';
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        }

}
