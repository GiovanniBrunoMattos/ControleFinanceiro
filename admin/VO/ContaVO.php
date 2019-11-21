<?php

class ContaVO{
    
    private $idconta;
    private $agencia;
    private $numero;
    private $valor;
    private $idusuario;
    private $idbanco;
    
    function SetIdConta($p){
        $this->idconta = $p;
    }
    function GetIdConta(){
        return $this->idconta;
    }
    function SetAgencia($p){
        $this->agencia = $p;
    }
    function GetAgencia(){
        return $this->agencia;
    }
    function SetNumero($p){
        $this->numero = $p;
    }
    function GetNumero(){
        return $this->numero;
    }
    function SetValor($p){
        $this->valor = $p;
    }
    function GetValor(){
        return $this->valor;
    }
    function SetIdUsuario($p){
        $this->idusuario = $p;
    }
    function GetIdUsuario(){
        return $this->idusuario;
    }
    function SetIdBanco($p){
        $this->idbanco=$p;
    }
    function GetIdBanco(){
        return $this->idbanco;
    }
    
    
}