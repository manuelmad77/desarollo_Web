<?php
global $mysqli;
$idmarca = 3;
?>
<p class="titulo_marca_detalle">Productos disponibles<p>
    <div class="contenedor_marca">
    <?php
    $strsql="SELECT `idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `cantidad`, `url_imagen`, `fecha_creacion` FROM `productos` where `idmarca`=?;";

    if($stmt = $mysqli->prepare($strsql)){
        $stmt->bind_param("i",$idmarca);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->bind_result($idproducto,$nombre_producto,$idcategoria,$descripcion,$precio,$cantidad,$url_imagen,$fecha_creacion);
        
            while($stmt->fetch()){
            ?>  
            <a class ="ultimos_productos" href="?modulo=producto_detalles&id_producto=<?php echo $idproducto?>">
                <div class="producto_detalle">
                    <div class="producto_detalle_left">
                        <img class="producto_imagen" src="<?php echo $url_imagen?>" alt="">
                    </div>
                    <div class="producto_detalle_right">
                        <h4 class="producto_titulo"><?php echo $nombre_producto?></h4>
                        <p>Descripcion del producto: <b><span><?php echo $descripcion?></span></b></p>
                        <p>Cantidad en existencia: <b><span><?php echo $cantidad?></span></b></p>
                        <h5 class="producto_precio">Precio: <b><?php echo "L" .number_format($precio,2)?></b></h5>
                    </div>
                </div>
            </a>
            <?php
            }
        }else{
            echo "No hay datos para mostrar";
        }
    }else{
        echo "Error al preparar la consulta";
    }
    ?>
</section>

