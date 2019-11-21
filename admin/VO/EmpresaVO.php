<?php

class EmpresaVO{
    
    private $idempresa;
    private $nome;
    private $endereco;
    private $telefone;
    private $idusuario;
    
    
    function SetIdEmpresa($p){
        $this->idempresa = $p;
    }
    function GetIdEmpresa(){
        return $this->idempresa;
    }
    function SetNome($p){
        $this->nome = $p;
    }
    function GetNome(){
        return $this->nome;
    }
    function SetEndereco($p){
        $this->endereco = $p;
    }
    function GetEndereco(){
        return $this->endereco;
    }
    function SetTelefone($p){
        $this->telefone = $p;
    }
    function GetTelefone(){
        return $this->telefone;
    }
    function SetIdUsuario($p){
        $this->idusuario = $p;
    }
    function GetIdUsuario(){
        return $this->idusuario;
    }
}