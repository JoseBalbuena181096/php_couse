-- Inicializar my sql en la consola
$ mysql -u root -p
-- mostrar las base de datos
> SHOW DATABASES;

-- Crear una base de datos
> CREATE DATABASE appsalon;

-- Ingresar a una base de datos para usarla
> USE appsalon;

-- Crear una tabla
> CREATE TABLE servicios(
    -> id INT(11) NOT NULL AUTO_INCREMENT, --Entero de hasta 11 digitos
    -> nombre VARCHAR(60) NOT NULL, -- Hasta 60 caracteres
    -> precio DECIMAL(6, 2) NOT NULL, -- 5 digitos y 2 decimales
    -> PRIMARY KEY (id)
    -> );

-- Mostrar Tablas
> SHOW TABLES;

-- Mostrar estructura de una tabla
> DESCRIBE servicios;

-- CRUD CREATE READ UPDATE DELETE
-- Casi todas la aplicaciones tienen un CRUD

-- Insertar elementos en una tabla
> INSERT INTO servicios (nombre, precio) VALUES ("Corte de cabello Adulto", 80);
> INSERT INTO servicios (nombre, precio) VALUES ('Corte de cabello Niño', 60);
> INSERT INTO servicios (nombre, precio) VALUES ('Corte de cabello Mujer', 100);
> INSERT INTO servicios (nombre, precio) VALUES 
    -> ('Peinado Mujer', 80),
    -> ('Peinado Hombre', 60);

-- Leer los registros o leerlos
> SELECT * FROM servicios; -- Seleccionar todos los elementos de la tabla servicios

-- Seleccionar solo una columna de la tabla
> SELECT nombre FROM servicios;

-- Selccionar dos campos
> SELECT nombre, precio FROM servicios;

-- Ordenarlos por el precio y no el id
> SELECT id, nombre, precio FROM servicios ORDER BY precio;

-- Cambiar el orden de la los resultados
> SELECT id, nombre, precio FROM servicios ORDER BY precio DESC;

-- Limitar la consulta a 2 resultados
> SELECT id, nombre, precio FROM servicios LIMIT 2;

-- Limitar consulta y traerlas en orden desendente 
> SELECT id, nombre, precio FROM servicios ORDER BY id DESC LIMIT 2;

-- Traer un elemento especifico 
> SELECT id, nombre, precio FROM SERVICIOS WHERE id = 3;
> SELECT id, nombre, precio FROM SERVICIOS WHERE precio = 60;

-- Actualizar un campo de la tabla
> UPDATE servicios  SET precio = 70 WHERE id = 2;

> UPDATE servicios SET nombre = 'Corte de Cabello de Niño Actualizado' WHERE id = 2;

-- Update more than field
> UPDATE servicios SET nombre = "Corte de Cabello de Adulto  ACTUALIZADO", precio = 120  WHERE id = 1;

-- Delete item from the table
> DELETE FROM servicios WHERE id = 1;

-- Agregar una columna a la tabla 
> ALTER TABLE servicios ADD description VARCHAR(100) NOT NULL;

-- Modificar una columna ya existente
> ALTER TABLE servicios CHANGE description nuevonombre VARCHAR(11) NOT NULL;

-- Insertar en la tabla modificada
> INSERT INTO servicios (nombre, precio, nuevonombre) VALUES ('PEINADO', 100, 'Hola');

-- Modificar una columna ya existente
> ALTER TABLE servicios CHANGE nuevonombre description VARCHAR(11) NOT NULL;

-- ELIMINAR UNA COLUMNA DE UNA TABLA
> ALTER TABLE servicios DROP COLUMN description;

-- Eliminar una tabla 
> DROP TABLE servicios;

-- Crear nuestra tabla servicios de nuevo
> CREATE TABLE servicios(
    ->  id INT NOT NULL AUTO_INCREMENT,
    ->  nombre VARCHAR(60) NOT NULL,
    ->  precio DECIMAL(6, 2) NOT NULL,
    ->  PRIMARY KEY(id)  
    ->  );

-- Crear la tabla reservaciones 
> CREATE TABLE reservaciones(
    ->  id INT(11) NOT NULL AUTO_INCREMENT,
    ->  nombre VARCHAR(60) NOT NULL,
    ->  apellido VARCHAR(60) NOT NULL,
    ->  hora TIME DEFAULT NULL,
    ->  fecha DATE DEFAULT NULL,
    ->  servicios VARCHAR(255) NOT NULL,
    ->  PRIMARY KEY (id)
    ->  );

-- Insertar muchos elementos

        INSERT INTO reservaciones (nombre, apellido, hora, fecha, servicios) VALUES
        ('Juan', 'De la torre', '10:30:00', '2021-06-28', 'Corte de Cabello Adulto, Corte de Barba' ),
        ('Antonio', 'Hernandez', '14:00:00', '2021-07-30', 'Corte de Cabello Niño'),
        ('Pedro', 'Juarez', '20:00:00', '2021-06-25', 'Corte de Cabello Adulto'),
        ('Mireya', 'Perez', '19:00:00', '2021-06-25', 'Peinado Mujer'),
        ('Jose', 'Castillo', '14:00:00', '2021-07-30', 'Peinado Hombre'),
        ('Maria', 'Diaz', '14:30:00', '2021-06-25', 'Tinte'),
        ('Clara', 'Duran', '10:00:00', '2021-07-01', 'Uñas, Tinte, Corte de Cabello Mujer'),
        ('Miriam', 'Ibañez', '09:00:00', '2021-07-01', 'Tinte'),
        ('Samuel', 'Reyes', '10:00:00', '2021-07-02', 'Tratamiento Capilar'),
        ('Joaquin', 'Muñoz', '19:00:00', '2021-06-28', 'Tratamiento Capilar'),
        ('Julia', 'Lopez', '08:00:00', '2021-06-25', 'Tinte'),
        ('Carmen', 'Ruiz', '20:00:00', '2021-07-01', 'Uñas'),
        ('Isaac', 'Sala', '09:00:00', '2021-07-30', 'Corte de Cabello Adulto'),
        ('Ana', 'Preciado', '14:30:00', '2021-06-28', 'Corte de Cabello Mujer'),
        ('Sergio', 'Iglesias', '10:00:00', '2021-07-02', 'Corte de Cabello Adulto'),
        ('Aina', 'Acosta', '14:00:00', '2021-07-30', 'Uñas'),
        ('Carlos', 'Ortiz', '20:00:00', '2021-06-25', 'Corte de Cabello Niño'),
        ('Roberto', 'Serrano', '10:00:00', '2021-07-30', 'Corte de Cabello Niño'),
        ('Carlota', 'Perez', '14:00:00', '2021-07-01', 'Uñas'),
        ('Ana Maria', 'Igleias', '14:00:00', '2021-07-02', 'Uñas, Tinte'),
        ('Jaime', 'Jimenez', '14:00:00', '2021-07-01', 'Corte de Cabello Niño'),
        ('Roberto', 'Torres', '10:00:00', '2021-07-02', 'Corte de Cabello Adulto'),
        ('Juan', 'Cano', '09:00:00', '2021-07-02', 'Corte de Cabello Niño'),
        ('Santiago', 'Hernandez', '19:00:00', '2021-06-28', 'Corte de Cabello Niño'),
        ('Berta', 'Gomez', '09:00:00', '2021-07-01', 'Uñas'),
        ('Miriam', 'Dominguez', '19:00:00', '2021-06-28', 'Corte de Cabello Niño'),
        ('Antonio', 'Castro', '14:30:00', '2021-07-02', 'Corte de Cabello Adulti'),
        ('Hugo', 'Alonso', '09:00:00', '2021-06-28', 'Corte de Barba'),
        ('Victoria', 'Perez', '10:00:00', '2021-07-02', 'Uñas, Tinte'),
        ('Jimena', 'Leon', '10:30:00', '2021-07-30', 'Uñas, Corte de Cabello Mujer'),
        ('Raquel' ,'Peña', '20:30:00', '2021-06-25', 'Corte de Cabello Mujer');

--
    INSERT INTO servicios ( nombre, precio ) VALUES
        ('Corte de Cabello Niño', 60),
        ('Corte de Cabello Hombre', 80),
        ('Corte de Barba', 60),
        ('Peinado Mujer', 80),
        ('Peinado Hombre', 60),
        ('Tinte',300),
        ('Uñas', 400),
        ('Lavado de Cabello', 50),
        ('Tratamiento Capilar', 150);

-- Seleccionar servicios por precio
> SELECT * FROM servicios WHERE precio > 90;

> SELECT * FROM servicios WHERE precio >= 80;

> SELECT * FROM servicios WHERE precio = 80;

> SELECT * FROM servicios WHERE precio BETWEEN 100 AND 200;

-- Contar elementos de una fecha
> SELECT COUNT(id), fecha
    ->  FROM reservaciones
    ->  GROUP BY fecha
    ->  ORDER BY COUNT(id) DESC;

-- Sumar los elementos de una tabla
> SELECT SUM(precio) AS totalServicios FROM servicios;

-- Encontrar el servicio con el menor precio
> SELECT MIN(precio) AS precioMenor FROM servicios;

-- Encontrar el servicio con el mayor precio
> SELECT MAX(precio) AS precioMenor FROM servicios;

-- Buscar información en la base de datos que inician con Lavado
> SELECT * FROM servicios WHERE nombre LIKE 'Lavado%';

--Buscar información en la base de datos que termina con Lavado
> SELECT * FROM servicios WHERE nombre LIKE '%Lavado';

--Buscar información en la base de datos que contenga Lavado
> SELECT * FROM servicios WHERE nombre LIKE '%Lavado%';

-- Unir columnas de nombre y apellido
> SELECT CONCAT(nombre, ' ', apellido) AS nombreCompleto FROM reservaciones;

-- Traer donde se une nombre y apellido especifico
> SELECT * FROM reservaciones
    ->  WHERE CONCAT(nombre, " ", apellido) LIKE '%Ana Preciado%';

-- Traer donde se une nombre y apellido especifico con hora y fecha 
> SELECT hora, fecha, CONCAT(nombre, " ", apellido) as 'Nombre Completo'
    ->  FROM reservaciones
    ->  WHERE CONCAT(nombre, " ", apellido)
    ->  LIKE  '%Ana Preciado%';

-- Traeser varios elementos de un id
> SELECT * FROM reservaciones WHERE id IN(1, 3);

-- Seleccionar por mas de una condicion

> SELECT * FROM reservaciones WHERE fecha = "2021-06-28" AND id = 1;

> SELECT * FROM reservaciones WHERE fecha = "2021-06-28" AND id = 1 AND nombre="Juan";

> SELECT * FROM reservaciones WHERE fecha = "2021-06-28" AND id IN(1, 10);

-- Primera Regla de Normalización 1NF:
-- Cada columna debe tener solo 1 valor y no debe haber grupos repetidos;

-- Segunda regla de normalización 2NF:
-- Una vez que aplica la primera regla formal
-- La primera nos dice que no debemos tener multiples valores en una celda, la 2 y 3
-- se enfocan más en la relación con otras columnas.
-- La segunda se utiliza en llaves primarias compuestas (se usan como referencias) 
-- en una tabla la pk(primary key) seria la fk(foring key) en otra tabla que hace referecia
-- al valor de la llave primaria

-- Tercera Regla de Normalización: 3NF
-- Al igual que ls 2NF tiene que ver con la relación de datos.
-- Mientras que la 2NF se enfoca en la llave compuesta, la 3NF se enfoca en los demás
-- datos que no forman parte de la llave compuesta

-- Denormalización
-- Algunas veces te encontrarás bases de datos que rompen las reglas de la normalizacón,
-- no por eso significa que está mal.

-- Un DIAGRAMA ER (entidad relación)
-- Sirve para: Dar una idea de forma gráfica de las entidades(Tablas) y sus atributos.
-- También ayudan a conocer como se relacionan los datos.

-- Cardinalidad: Se refiere al número máximo de veces que una instancia se ralaciona con otra
-- No se piensa como un número obligatorio, sino el máximo de veces que 2 tablas se pueden relacionar


-- Eliminar una tabla

> DROP TABLE reservaciones;
-- Crear la tabla de clientes

> CREATE TABLE clientes(
    ->  id INT(11) NOT NULL AUTO_INCREMENT,
    ->  nombre VARCHAR(60) NOT NULL,
    ->  apellido VARCHAR(60) NOT NULL,
    ->  telefono VARCHAR(10) NOT NULL,
    ->  email VARCHAR(30) NOT NULL UNIQUE,
    ->  PRIMARY KEY(id)
    -> );   

-- Insertar un elemento en la tabla
> INSERT INTO clientes (nombre, apellido, telefono , email) VALUES
    ->  ('Jose', 'Balbuena', '18101996', 'jose@gmail.com');

-- Crear tabla citas
> CREATE TABLE citas(
    -> id INT(11) NOT NULL AUTO_INCREMENT,
    -> fecha DATE NOT NULL,
    -> hora TIME NOT NULL,
    -> clienteId INT(11) NOT NULL,
    -> PRIMARY KEY (id),
    -> KEY clienteId (clienteID),
    -> CONSTRAINT cliente_FK FOREIGN KEY (clienteId) REFERENCES clientes (id)
    -> );

-- Insertar una cita 
> INSERT INTO citas (fecha, hora, clienteId) VALUES
    ->  ('2021-06-28', '10:30:00', 1);

-- Unir dos tablas en una consulta
> SELECT * FROM citas 
    ->  INNER JOIN clientes ON clientes.id = citas.clienteId;

> SELECT * FROM citas 
    ->  LEFT JOIN clientes ON clientes.id = citas.clienteId;

-- Insertar clientes
> INSERT INTO clientes (nombre, telefono, apellido, email) VALUES
    -> ("Karen", "Perez", "1093011391", "corre@gamil.com");

-- SELECT RIGHT
> SELECT * FROM citas RIGHT JOIN clientes on clientes.id = citas.clienteId;

-- CREAR una tabla pivote
> CREATE TABLE citasServicios(
    ->  id INT(11) AUTO_INCREMENT,
    ->  citaId INT(11) NOT NULL,
    ->  servicioId INT(11) NOT NULL,
    ->  PRIMARY KEY(id),
    ->  KEY citaId(citaId),
    ->  CONSTRAINT citas_FK
    ->  FOREIGN KEY (citaId)
    ->  REFERENCES citas(id),
    ->  KEY servicioId(servicioId),
    ->  CONSTRAINT servicios_FK
    ->  FOREIGN KEY (servicioId)
    ->  REFERENCES servicios(id)
> );

-- Insertar en la tabla pivote
> INSERT INTO citasServicios (citaId, servicioId) VALUES (2, 8);

-- Unir dos o mas tablas con un JOIN 

> SELECT * FROM citasServicios
    ->  LEFT JOIN citas ON citas.id = citasServicios.citaId
    ->  LEFT JOIN servicios ON servicios.id = citasServicios.servicioId; 

-- Unir multiples JOINS
> SELECT * FROM citasServicios
    ->  LEFT JOIN citas ON citas.id = citasServicios.citaId
    ->  LEFT JOIN clientes ON citas.clienteId = clientes.id
    ->  LEFT JOIN servicios ON servicios.id = citasServicios.Id; 


-- Insertar más servicios
> INSERT INTO citasServicios (citaId, servicioId) VALUES (2, 3);

> INSERT INTO citasServicios (citaId, servicioId) VALUES (2, 4);
