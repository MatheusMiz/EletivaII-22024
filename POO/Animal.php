<?php

abstract class Animal{
    protected $nome;
    protected $raca;

    abstract public function FazerBarulho();

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setRaca($raca){
        $this->raca = $raca;
    }
    public function getRaca(){
        return $this->raca;
    }
}

class Cachorro extends Animal {
    private $pelagem;
    public function setPelagem($pelagem){
        $this->pelagem = $pelagem;
    }
    public function getPelagem(){
        return $this->pelagem;
    }
    public function FazerBarulho(){
        return "Au au!"
    }
}