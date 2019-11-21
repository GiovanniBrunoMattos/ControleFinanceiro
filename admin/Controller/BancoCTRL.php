<?php

require_once './DAO/BancoDAO.php';

class BancoCTRL{
    
    public function CadastrarBanco(BancoVO $vo){
        $DAO = new BancoDAO();
        $texto = $DAO ->CadastrarBanco($vo);
        return $texto;               
    }
    
    public function ListarBancos($idUsuarioLogado){
        $DAO = new BancoDAO();
        return $DAO->ListarBancos($idUsuarioLogado);
    }
    
    public function ConsultarBanco($idBancoListado){
        $DAO = new BancoDAO();
        return $DAO->ConsultarBanco($idBancoListado);
    }
    
    public function AlterarBanco(BancoVO $vo){
        $DAO = new BancoDAO();
        return $DAO->AlterarBanco($vo);
    }
    
    public function ExcluirBanco($idBanco){
        $DAO = new BancoDAO();
        return $DAO->ExcluirBanco($idBanco);
    }
}