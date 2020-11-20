<?php

class Contact {
    private $nome;
    private $telefone;
    private $email;
    private $nasc;
    
    function __construct($nome, $telefone, $email, $nasc) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->nasc = $nasc;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setTel($telefone) {
        $this->telefone = $telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNasc($nasc) {
        $this->nasc = $nasc;
    }

    public function getInfos() {
        echo <<<INFO
        Nome: $this->nome 
        Telefone: $this->telefone
        Email: $this->email
        Data de Nascimento: $this->nasc
        INFO;
    }
}