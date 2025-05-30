<?php

class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    function comprar(){
        echo "O cliente {$this->nome} realizou uma compra";
    }
    function definirNome($nome){
        $this -> nome = $nome;
        echo "O nome do cliente foi definido como: {$this->nome}";
    }
    function definirEndereco($endereco){
        $this -> endereco = $endereco;
        echo "O endereço do cliente foi definido como: {$this->endereco}";
    }
    function definirIdade($idade){
        $this -> idade = $idade;
        echo "A idade do cliente do  foi definido como: {$this->idade}";
    }
    function definirTelefone($telefone){
        $this -> telefone = $telefone;
        echo "O telefone do cliente foi definido como: {$this->telefone}";
    }
}