<?php

require_once './DAO/CategoriaDAO.php';

class CategoriaCTRL {

    public function NovaCategoria(CategoriaVO $vo) {
        $DAO = new CategoriaDAO();
        $texto = $DAO->NovaCategoria($vo);
        return $texto;
    }
    
    public function ListarCategorias($idUsuarioLogado){
        $DAO = new CategoriaDAO();
        return $DAO->ListarCategorias($idUsuarioLogado);
    }
    
    public function ConsultarCategoria($idCategoriaListada){
        $DAO = new CategoriaDAO();
        return $DAO->ConsultarCategoria($idCategoriaListada);
    }
    
    public function AlterarCategoria(CategoriaVO $vo) {
        $dao = new CategoriaDAO();
        return $dao->AlterarCategoria($vo);
    }
    
    public function ExcluirCategoria($idCategoria){
        $DAO = new CategoriaDAO();
        return $DAO->ExcluirCategoria($idCategoria);
    }
}