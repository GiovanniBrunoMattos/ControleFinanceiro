<?php

require_once './DAO/UsuarioDAO.php';

class UsuarioCTRL {

    public function CadastrarUsuario(UsuarioVO $vo) {
        $DAO = new UsuarioDAO();
        $texto = $DAO->CadastrarUsuario($vo);
        return $texto;
    }

}
