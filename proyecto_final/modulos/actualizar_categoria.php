<?php
global $mysqli;

$idcategoria = $_GET['id_categoria'];

$strsql="SELECT `idcategoria`, `nombre_categoria`, `descripcion`, `fecha_creacion` FROM `categorias` where `idcategoria`=?;";

if($stmt=$mysqli->prepare($strsql)){
    $stmt->bind_param("i",$idcategoria);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows> 0){
        $stmt->bind_result($idcategoria,$nombre_categoria,$descripcion,$fecha_creacion);
        $stmt->fetch();
    }else{
        echo "No hay productos disponibles";
    }
}else{
    echo "Error al preparar la consulta";
}
?>

<div class="container_nuevo">
    <div class="container_creacion">
        <form action="modulos/update_categoria.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID. Categoria</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $idcategoria?>" name="idcategoria" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de categoria</label>
                <input type="" class="form-control" id="exampleFormControlInput1" value="<?php echo $nombre_categoria?>" name="nombre_categoria">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $descripcion?>" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha creación</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" value="<?php echo $fecha_creacion?>" name="fecha_creacion">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="enviar_producto" placeholder="" value="Actualizar">
            </div>
        </form>
    </div>
</div>
