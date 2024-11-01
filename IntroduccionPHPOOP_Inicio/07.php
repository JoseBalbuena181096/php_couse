<?php include 'includes/header.php';
// POLIMORFIRSMO

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

class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){

    }

    public function getInfo() : string{
        return "El AUTO tiene " .$this->ruedas.
        " ruedas y una capacidad de ". $this->capacidad ."personas".
        "y tiene el color ".$this->color;
    }
    public function getColor() : string{
        return "The color is ".$this->color;
    }
}

echo "<pre>";
var_dump($auto = new Automovil(4, 4, "Rojo"));
var_dump($transporte = new Transporte(4, 16));
echo $auto->getInfo();
echo $transporte->getColor();
echo "</pre>";

include 'includes/footer.php';