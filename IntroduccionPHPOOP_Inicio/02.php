<?php 
declare(strict_types = 1);
include 'includes/header.php';

// LA ENCAPSULACIÓN

// Definir una clase
class Producto {
    // Public - Se puede acceder y modificar en cualquier lugar(clase y objeto)
    // Protected - Se puede accedar unicamente en la clase por medio de getters y setters
    // private - solo mienbros de la misma clase pueden accedaer al el

    // constructor
    public function __construct(protected string $nombre,public int $precio,public bool $disponible){
    }

    public function mostrarProducto() : void {
        echo "El producto es ".$this->nombre ." y  su precio es de: ". $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
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