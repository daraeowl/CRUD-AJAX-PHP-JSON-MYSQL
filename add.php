<?php


include('conexion.php');

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $frase_promocional = $_POST['frase_promocional'];
    $disponibilidad = $_POST['disponibilidad'];
    $fecha = $_POST['fecha'];
    $promocion = $_POST['promocion'];
    $colores = $_POST['colores'];
    $precio = $_POST['precio'];

    $consulta = "INSERT INTO productos(nombre,codigo,descripcion,categoria,frase_promocional,fecha,
    colores,precio,disponibilidad,promocion) VALUES('$nombre','$codigo','$descripcion','$categoria',
    '$frase_promocional','$fecha','$colores','$precio','$disponibilidad','$promocion')";

    $resultado = mysqli_query($conection, $consulta);

    if(!$resultado){
    die("Fallo al agregar");
                }
    echo "Producto agregado";
    

}



?>