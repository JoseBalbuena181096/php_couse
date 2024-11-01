<?php 
declare(strict_types = 1);
include 'includes/header.php';

// LA ABSTRAPCION

// Definir una clase

class Producto {
    // Definir atributos (propiedades)
    // public $nombre;
    // public $precio;
    // public $disponible;

    // // constructor
    // public function __construct(string $nombre, int $precio,bool $disponible){
    //     echo "Desde el constructor";
    //     $this->nombre = $nombre;
    //     $this->precio = $precio;
    //     $this->disponible = $disponible;
    // }

    // constructor
    public function __construct(public string $nombre,public int $precio,public bool $disponible){
    }

    public function mostrarProducto(){
        echo "El producto es ".$this->nombre ." y  su precio es de: ". $this->precio;
    }
}

// Instanciar nuestra clase
$producto = new Producto("Monitor",12, true);


$producto->mostrarProducto();
echo "<pre>";
var_dump($producto);
echo("</pre>");


$producto2 = new Producto("Tablet", 2, false);


$producto2->mostrarProducto();
echo "<pre>";
var_dump($producto2);
echo("</pre>");


include 'includes/footer.php';