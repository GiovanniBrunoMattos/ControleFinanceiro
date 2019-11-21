<?php

require_once './DAO/EmpresaDAO.php';

class EmpresaCTRL{
    
    public function CadastrarEmpresa(EmpresaVO $vo) {
        $DAO = new EmpresaDAO();
        $texto = $DAO -> CadastrarEmpresa($vo);
        return $texto;
               
    }
    
    public function ListarEmpresas($idUsuarioLogado){
        $DAO = new EmpresaDAO();
        return $DAO->ListarEmpresas($idUsuarioLogado);
    }
    
    public function ConsultarEmpresa($idEmpresaListada){
        $DAO = new EmpresaDAO();
        return $DAO->ConsultarEmpresa($idEmpresaListada);
    }
    
    public function AlterarEmpresa(EmpresaVO $vo){
        $DAO = new EmpresaDAO();
        return $DAO->AlterarEmpresa($vo);
    }
    
    public function ExcluirEmpresa($idEmpresa) {
        $DAO = new EmpresaDAO();
        return $DAO->ExcluirEmpresa($idEmpresa);
    }
}

