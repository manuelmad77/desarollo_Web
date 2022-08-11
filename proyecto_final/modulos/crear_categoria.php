<div class="container_nuevo">
    <div class="container_creacion">
        <form action="modulos/insertar_categoria.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID. Categoria</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" value="" name="idcategoria">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de categoria</label>
                <input type="" class="form-control" id="exampleFormControlInput1" value="" name="nombre_categoria">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha creación</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" value="" name="fecha_creacion">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="enviar_producto" placeholder="" value="Actualizar">
            </div>
        </form>
    </div>
</div>