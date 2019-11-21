<?php

class BancoVO{
    
    private $idbanco;
    private $nome;
    private $idusuario;
    
    function SetNome($p){
        $this->nome = $p;
    }
    function GetNome(){
        return $this->nome;
    }
    function  SetIdUsuario($p){
        $this->idusuario = $p;
    }  
    function  GetIdUsuario(){
        return $this->idusuario;
    }  
    
    function SetIdBanco($p){
        $this->idbanco = $p;
    }
    function GetIdBanco(){
        return $this->idbanco;
    }
    
}