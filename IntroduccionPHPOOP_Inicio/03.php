<?php 
declare(strict_types = 1);
include 'includes/header.php';

// Métodos estaticos

// Definir una clase
class Producto {
    public $imagen;
    
    public static $imagenPlaceholder = "Imagen.jpg";
    
    // constructor
    public function __construct(protected string $nombre,public int $precio,public bool $disponible, string $imagen){
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }
    
    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }
    
    public static function obtenerProducto(){
        echo "Obteniendo datos del producto .... ";
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

// usando un metodo statico sin instancia de la clase


// Instanciar nuestra clase
$producto = new Producto("Monitor",12, true, '');

$producto->mostrarProducto();
echo "fin jsjjs";
echo $producto->obtenerImagenProducto();

// Instanciar nuestra clase
$producto2 = new Producto("Monitor2",13, true, 'monitor.jpg');

$producto2->mostrarProducto();
echo $producto2->obtenerImagenProducto();

include 'includes/footer.php'; 