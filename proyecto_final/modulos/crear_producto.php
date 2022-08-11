<!-- <?php
global $mysqli;
?> -->


<div class="container_nuevo">
    <div class="container_creacion">
        <form action="modulos/insertar_producto.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID. Producto</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="idproducto">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de producto</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="" name="nombre_producto">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" name="idcategoria">
                    <option selected>Seleccionar categoria</option>               
                <?php
                    $strsql = "SELECT `idcategoria`, `nombre_categoria` FROM `categorias` ORDER BY `nombre_categoria`";
                    if ($stmt = $mysqli->prepare($strsql)) {
                    $stmt->execute();
                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($idcategoria, $nombre_categoria);
                        
                        while ($stmt->fetch()) {
                        ?>
                        <option value="<?php echo $idcategoria?>"><?php echo $nombre_categoria?></option>
                        <?php
                        }

                    } else {
                        echo "No hay registros";
                    }
                    } else {
                    echo "No se pudo preparar la consulta";
                    }                    
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Precio</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="precio">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="cantidad">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">URL Imagen</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="url_imagen">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha creación</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="fecha_creacion">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Marca</label>
                <select class="form-select" aria-label="Default select example" name="idmarca">
                    <option selected>Seleccionar marca</option>               
                <?php
                    $strsql = "SELECT `idmarca`, `nombre_marca` FROM `marcas` ORDER BY `nombre_marca`";
                    if ($stmt = $mysqli->prepare($strsql)) {
                    $stmt->execute();
                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($idmarca, $nombre_marca);
                        
                        while ($stmt->fetch()) {
                        ?>
                        <option value="<?php echo $idmarca?>"><?php echo $nombre_marca?></option>
                        <?php
                        }

                    } else {
                        echo "No hay registros";
                    }
                    } else {
                    echo "No se pudo preparar la consulta";
                    }                    
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Precio oferta</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="precio_oferta">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="enviar_producto" placeholder="">
            </div>
        </form>
    </div>
</div>