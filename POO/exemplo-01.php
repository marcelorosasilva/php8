<?php

class Pessoa{
    //variaveis
    public $nome;//Atributo tem que escrever $this->nome

    //function
    public function falar(){
        return " O meu nome é " . $this->nome;
    }

}
$marcelo = new Pessoa();//Instanciando a classe Pessoa

$marcelo->nome = "Marcelo da Silva Rosa";//Acessando o atributo nome

echo $marcelo->falar();//execultando a funcão falar

?>