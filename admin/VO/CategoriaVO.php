<?php

class CategoriaVO {

    private $idcategoria;
    private $nome;
    private $idusuario;
    
    function getIdCategoria() {
        return $this->idcategoria;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdCategoria($p) {
        $this->idcategoria = $p;
    }

    function setNome($p) {
        $this->nome = $p;
    }

    function getIdUsuario(){
        return $this->idusuario;
    }
    function setIdUsuario($p){
        $this->idusuario = $p;
    }
    }