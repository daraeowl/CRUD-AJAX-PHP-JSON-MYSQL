<?php

include('conexion.php');

    $id = $_POST['id'];
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

    $consulta = "UPDATE productos SET nombre = '$nombre',codigo='$codigo',descripcion='$descripcion',categoria='$categoria',
    frase_promocional='$frase_promocional',fecha='$fecha',colores='$colores',
    precio='$precio',disponibilidad='$disponibilidad',promocion='$promocion' WHERE id='$id'";
    $resultado = mysqli_query($conection, $consulta);

    if(!$resultado){
    die("Fallo al editar");
                }
    echo "Producto editado";

?>