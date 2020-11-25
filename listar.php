<?php

include("conexion.php");

$consulta = "SELECT * FROM productos ORDER BY id ASC";

$resultado = mysqli_query($conection,$consulta);


if(!$resultado){
    die("Error".mysqli_error($conection));
}

$json = array();

while($row = mysqli_fetch_array($resultado)){
        $codigo = quitaCaracteres($row['codigo']);
        $nombre = quitaCaracteres($row['nombre']);
        $categoria = quitaCaracteres($row['categoria']);
        $frase_promocional = quitaCaracteres($row['frase_promocional']);
        $descripcion = quitaCaracteres($row['descripcion']);
        $colores = $row['colores'];
        $precio = $row['precio'];
        $disponibilidad = quitaCaracteres($row['disponibilidad']);
        $promocion = quitaCaracteres($row['promocion']);
        $fecha = $row['fecha'];
    $json[] = array(
        'id' => $row['id'],
        'codigo' => $codigo,
        'nombre' => $nombre,
        'categoria' => $categoria,
        'frase_promocional' => $frase_promocional,
        'descripcion' =>$descripcion,
        'colores' => $colores,
        'precio' => $precio,
        'disponibilidad' => $disponibilidad,
        'promocion' => $promocion,
        'fecha' => $fecha
    );
}

    $json_string = json_encode($json);
    echo $json_string;
    

function quitaCaracteres($texto){
    $texto = preg_replace('([^A-Za-z0-9 ])', '', $texto);
    return $texto;
}


?>