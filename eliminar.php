<?php

include('conexion.php');

if(isset($_POST['id'])){


$id = $_POST['id'];

$consulta = "DELETE FROM productos WHERE id =$id";
$resultado = mysqli_query($conection,$consulta);

if(!$resultado){
    die("No se elimino".mysqli_error($conection));
}

echo "se elimino con exito";

}

?>