<?php
// clase. molde para crear objetos 


class carro{
    //atributos o ptopiedades (variables)
    public $color = "rojo";
    public $marca = "ferrari";
    public $modeloo = "aventador";
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;

    //metodo -> acciones que hace el carro(funciones)

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }


    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }

}
    

    //crear un objeto / instanciar una clase 
$carroEspacial = new Carro();

 //var_dump($carroEspacial);
echo "la velocidad de mi carro es: " .$carroEspacial->getvelocidad()."<br>";

echo "El color de mi carro es de : ".$carroEspacial->getcolor()."<br>";

$carroEspacial->setColor("amarillo");   

echo $carroEspacial->getcolor()."<br>";

$carroEspacial ->acelerar();
$carroEspacial ->acelerar();
$carroEspacial ->acelerar();
$carroEspacial ->acelerar();

echo "la velocidad de mi carro es: " .$carroEspacial->getvelocidad()."<br>";

$carroEspacial ->frenar();
echo "la velocidad despues frenar mi carro: " .$carroEspacial->getvelocidad()."<br>";
