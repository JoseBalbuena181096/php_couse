<?php include 'includes/header.php';

// LA HERENCIA

class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad){
    }

    public function getInfo() : string{
        return "El transporte tiene " .$this->ruedas. " ruedas y una capacidad de ". $this->capacidad ."personas";
    }

    public function getRuedas() : int{
        return $this->ruedas;
    }
 
}

class Bicicleta extends Transporte{
    public function getInfo() : string{
        return "El transporte tiene " .$this->ruedas. " ruedas y una capacidad de ". $this->capacidad ."personas  y no GASTA GASOLINA";
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad,protected string $transmicion){

    }
    public function getTransmicion() : string {
        return $this->transmicion;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();
echo "<hr>";

$auto = new Automovil(4, 4, "manual");
echo $auto->getInfo();
echo $auto->getTransmicion();
echo "<hr>";

include 'includes/footer.php';