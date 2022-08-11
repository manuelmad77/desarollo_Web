<?php
$servidor = "localhost";
$basedatos = "desarrollo_aplicaciones";
$usuario = "root";
$password = "";
$conectar = mysqli_connect($servidor,$usuario,$password,$basedatos);

$idproducto=$_POST['idproducto'];
$nombre_producto=$_POST['nombre_producto'];
$idcategoria=$_POST['idcategoria'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$url_imagen=$_POST['url_imagen'];
$fecha_creacion=$_POST['fecha_creacion'];
$idmarca=$_POST['idmarca'];
$precio_oferta=$_POST['precio_oferta'];


$sqli="INSERT INTO productos VALUES ('$idproducto','$nombre_producto','$idcategoria','$descripcion','$precio','$cantidad','$url_imagen','$fecha_creacion','$idmarca','$precio_oferta')";

$query=mysqli_query($conectar,$sqli);

if($query){
    Header("Location:../index.php?modulo=admin_productos");
}else{
    echo "No se pudo guardar el registro";
}

?>

