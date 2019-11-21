<?php

class UsuarioVO {

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $adm;
    private $status;

    public function SetID($p) {
        $this->id = $p;
    }

    public function GetID() {
        return $this->id;
    }

    public function SetNome($p) {
        $this->nome = $p;
    }

    public function GetNome() {
        return $this->nome;
    }

    public function SetEmail($p) {
        $this->email = $p;
    }

    public function GetEmail() {
        return $this->email;
    }

    public function SetSenha($p) {
        $this->senha = $p;
    }

    public function GetSenha() {
        return $this->senha;
    }

    public function SetAdm($p) {
        $this->adm = $p;
    }

    public function GetAdm() {
        return $this->adm;
    }

    public function SetStatus($p) {
        $this->status = $p;
    }

    public function GetStatus() {
        return $this->status;
    }

}
