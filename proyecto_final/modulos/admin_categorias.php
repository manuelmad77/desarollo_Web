<?php
  global $mysqli;
  global $urlweb;
?>

<div class ="administracion_productos table-responsive">
  <h1>Administracion de categorias</h1>
  <!-- Button trigger modal -->
  <a href="?modulo=crear_categoria">
    <button type="button" class="btn btn-primary" id="button_crear">
      Agregar categoria
    </button>
  </a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID.</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Fecha creación</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $strsql = "SELECT `idcategoria`, `nombre_categoria`, `descripcion`, `fecha_creacion` FROM `categorias` ORDER BY idcategoria";
      if ($stmt = $mysqli->prepare($strsql)) {
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
          $stmt->bind_result($idcategoria, $nombre_categoria, $descripcion, $fecha_creacion);
          while ($stmt->fetch()) {
          ?>
          <tr id="<?php echo $idcategoria ?>">
            <td><?php echo $idcategoria?></td>
            <td><?php echo $nombre_categoria ?></td>
            <td><?php echo $descripcion?></td>
            <td><?php echo $fecha_creacion ?></td>
            <td><a href="?modulo=actualizar_categoria&id_categoria=<?php echo $idcategoria?>" class="btn btn-secondary">Editar</a></td>
            <td><a href="javascript:eliminar(<?php echo $idcategoria ?>)" class="btn btn-danger">Eliminar</a></td>
          </tr>
          <?php
          }
        } else {
          echo "No hay registros";
      }
      } else {
        echo "No se pudo preparar la consuta";
      }
      ?>
    </tbody>
  </table>
</div>

<script>
        function eliminar(idcategoria)
        {
            var url = '<?php echo $urlweb ?>services/ws_admin_categorias.php?accion=eliminar';

            fetch(url,
            {
                method: 'POST',
                body: JSON.stringify({
                    "idcategoria":idcategoria
                })
            })
            .then((response) => response.json())
            .then((data) => {
                alert(data.text);
                const row = document.getElementById(idcategoria);
                row.remove();
            })
            .catch(console.error)
        }
    </script>
