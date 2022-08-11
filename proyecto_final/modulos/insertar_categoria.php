<?php
$servidor = "localhost";
$basedatos = "desarrollo_aplicaciones";
$usuario = "root";
$password = "";
$conectar = mysqli_connect($servidor,$usuario,$password,$basedatos);

$idcategoria=$_POST['idcategoria'];
$nombre_categoria=$_POST['nombre_categoria'];
$descripcion=$_POST['descripcion'];
$fecha_creacion=$_POST['fecha_creacion'];


$sqli="INSERT INTO categorias VALUES ('$idcategoria','$nombre_categoria','$descripcion','$fecha_creacion')";

$query=mysqli_query($conectar,$sqli);

if($query){
    Header("Location:../index.php?modulo=admin_categorias");
}else{
    echo "No se pudo guardar el registro";
}

?>

