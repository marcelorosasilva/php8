<?php

class Altomovel{
    private $modelo;//Atributo privada para modelo
    private $motor;//Atributo privada para motor
    private $ano;//Atributo privada para ano

    public function getModelo():string{
        return $this->modelo;
    }//metodos get

    public function setModelo($modelo){$this->modelo = $modelo; }//metodos set

    public function getMotor():float{ return $this->motor;   }//metodos get float

    public function setMotor($motor){$this->motor = $motor; }//metodos set

    public function getAno():int{ return $this->ano;  }//metodos get int

    public function setAno($ano){ $this->ano = $ano; }//metodos set

    //função exibir Altomovel
    function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }

}

$gol = new Altomovel();
$gol->setModelo("Gol-GT");
$gol->setAno(2024);
$gol->setMotor(1.0);


var_dump($gol->exibir());

?>