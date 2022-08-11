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

$sqli = "UPDATE categorias SET nombre_categoria='$nombre_categoria', descripcion='$descripcion', fecha_creacion='$fecha_creacion' WHERE idcategoria ='$idcategoria'";

$query=mysqli_query($conectar,$sqli);

if($query){
    echo "Categoria editada exitosamente";
    Header("Location:../index.php?modulo=admin_categorias");
}else{
    echo "No se pudo guardar el registro";
}
