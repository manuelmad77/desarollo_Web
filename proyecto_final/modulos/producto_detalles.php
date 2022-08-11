<?php
global $mysqli;

$idproducto = $_GET['id_producto'];

$strsql="SELECT `idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `cantidad`, `url_imagen`, `fecha_creacion` FROM `productos` where `idproducto`=?;";

if($stmt=$mysqli->prepare($strsql)){
    $stmt->bind_param("i",$idproducto);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows> 0){
        $stmt->bind_result($idproducto,$nombre_producto,$idcategoria,$descripcion,$precio,$cantidad,$url_imagen,$fecha_creacion);
        $stmt->fetch();
    }else{
        echo "No hay productos disponibles";
    }
}else{
    echo "Error al preparar la consulta";
}
?>

<div class="producto_detalle">
    <div class="producto_detalle_left">
        <img class="producto_imagen" src="<?php echo $url_imagen?>" alt="">
    </div>
    <div class="producto_detalle_right">
        <h4 class="producto_titulo"><?php echo $nombre_producto?></h4>
        <p>Descripcion del producto: <b><span><?php echo $descripcion?></span></b></p>
        <p>Cantidad en existencia: <b><span><?php echo $cantidad?></span></b></p>
        <h5 class="producto_precio">Precio: <b><?php echo "L" .number_format($precio,2)?></b></h5>
        <form method="POST">
            <input class= "producto_boton" type="submit" name="button1" value="Agregar al carrito"/>
            <?php
                if(isset($_POST['button1'])) {
                    $servidor = "localhost";
                    $basedatos = "desarrollo_aplicaciones";
                    $usuario = "root";
                    $password = "";
                    $conectar = mysqli_connect($servidor,$usuario,$password,$basedatos);
                    
                    $sqli="INSERT INTO carrito VALUES ('$idproducto','1',1,'$precio','$precio')";
                    
                    $query=mysqli_query($conectar,$sqli);
                    
                    if($query){
                        echo "Producto agregado exitosamente";
                    }else{
                        echo "No se pudo guardar el registro";
                    }    
                }
            ?>
        </form>
    </div>
</div>