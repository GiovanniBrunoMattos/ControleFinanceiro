<?php

require_once './DAO/ContaDAO.php';

class ContaCTRL{
    
    public function CadastrarConta(ContaVO $vo){
        $DAO = new ContaDAO();
        $texto = $DAO->CadastrarConta($vo);
        return $texto;
                                    
    }
               
    }