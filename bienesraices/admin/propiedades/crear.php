<?php 
    // Autenticar
    require '../../includes/funciones.php';
    $auth = estaAutenticado();
    if(!$auth){
        header('Location: /bienesraices/index.php');
    }
    
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Consultar par obtener los vendedores
    $consulta =  "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    

    // Arreglo con mensajes de errores

    $errors = [];

    $titulo = '';
    $precio = '';
    $habitaciones = '';
    $descripcion = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';
    $imagen = '';

    // Ejecutar el código despúes de que el usuarío envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
        

        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $wc = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado = date('Y/m/d');

        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        
        
        if(!$titulo ){
            // Agregar al final del arreflo
            $errors[] = "Debes añadir un titulo";
        }
        
        if(!$precio){
            $errors[] = "El precio es obligatorio";
        }

        if(!$descripcion){
            $errors[] = "La descripción es obligatoria";
        }

        if(strlen($descripcion)< 50){
            $errors[] = "La descripción es obligatoria y dene tener al menos 50 caracteres";
        }

        if(!$habitaciones){
            $errors[] = "El número de habitaciones es obligatorio";
        }

        if(!$wc){
            $errors[] = "El número de baños es obligatorio";
        }

        if(!$vendedorId){
            $errors[] = "Elige un vendedor";
        }

        if(!$imagen['name'] || $imagen['error']){
            $errors[] = "La imagen es obligatoria";
        }

        // Validar por tamaño (100k)
        $medida = 1000 * 1000;
        if($imagen['size'] > $medida){
            $errors[] = 'La imagen es muy pesada';
        }

        
        // echo "<pre>";
        // var_dump($imagen);
        // echo "</pre>";
        // exit;


        if(empty($errors)){

            /** SUBIDA DE ARCHIVOS **/
            // CREAR CARPETA
            $carpetaImagenes = '../../imagenes/';
            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }
            // Generar nombre único
            $nombreImagen = md5(uniqid(rand(),true)).".jpg";

            // subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes.$nombreImagen);

            // Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) 
            VALUES ('$titulo', '$precio', '$nombreImagen','$descripcion',
            '$habitaciones', '$wc', '$estacionamiento', '$creado' , '$vendedorId')";

            //echo $query;
            $resultado = mysqli_query($db, $query);
            if($resultado){
                // echo "Insertado correctamente";
                // Redireccionando a usuario
                header('Location: /bienesraices/admin/index.php?resultado=1');
            }
        }
    }

    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/bienesraices/admin/index.php" class="boton boton-verde">
            Volver
        </a>

        <?php foreach($errors as $error):?>
            <div class="alerta error">
                
                <?php echo $error ?>
            </div>
        <?php endforeach;?>

        <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input 
                    type="text" 
                    name="titulo" 
                    id="titulo"
                    placeholder="Titulo propiedad" 
                    value="<?php echo $titulo;?>">
                <label for="precio">Precio:</label>
                <input 
                    type="number" 
                    name="precio" 
                    id="precio" 
                    placeholder="Precio propiedad" 
                    value="<?php echo $precio;?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion;?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input 
                    type="number" 
                    name="habitaciones" 
                    id="habitaciones" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9"  
                    value="<?php echo $habitaciones;?>">
                
                <label for="wc">Baños:</label>
                <input 
                    type="number" 
                    name="wc" 
                    id="wc" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $wc;?>">

                <label for="estacionamiento">Estacionamieto:</label>
                <input 
                    type="number" 
                    name="estacionamiento" 
                    id="estacionamiento" 
                    placeholder="Ej: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $estacionamiento;?>">
                </fieldset>
                
                <fieldset>
                    <legend>Vendedor </legend>
                    <select name="vendedor">
                        <option value="">-- SELECCIONE --</option>
                        <?php while($vendedor = mysqli_fetch_assoc($resultado) ) : ?>
                            <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value = "<?php  echo $vendedor['id']; ?>">
                            <?php echo $vendedor['nombre']." ".$vendedor['apellido'] ?> </option>
                        <?php endwhile;?>
                    </select>
                </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
<?php 
    incluirTemplate('footer');
?>