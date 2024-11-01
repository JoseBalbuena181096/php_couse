<?php include 'includes/header.php';
// LAS INTERFACES

/*

Una interface básicamente nos dice que hace una clase y qué funciones tiene y  que
datos retorna pero no nos dice como lo hace
*/

interface TransporteInterfaz{
    public function getInfo()  : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad){
    }

    public function getInfo() : string{
        return "El transporte tiene " .$this->ruedas. " ruedas y una capacidad de ". $this->capacidad ."personas";
    }

    public function getRuedas() : int{
        return $this->ruedas;
    }
}



include 'includes/footer.php';