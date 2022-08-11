<?php
  global $mysqli;
  global $urlweb;
?>

<div class ="administracion_productos table-responsive">
  <h1>Carrito de compras</h1>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" id="button_crear">Pagar</button>
  </a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID.</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
       $total_pago = 0;
       $strsql = "SELECT carrito.idproducto, productos.nombre_producto, carrito.cantidad, carrito.precio, carrito.total FROM `carrito` INNER JOIN productos ON productos.idproducto=carrito.idproducto ORDER BY carrito.idproducto";
       if ($stmt = $mysqli->prepare($strsql)) {
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
          $stmt->bind_result($idproducto, $nombre_producto, $cantidad, $precio, $total);
          while ($stmt->fetch()) {
          ?>
          <tr id="<?php echo $idproducto?>">
            <td><?php echo $idproducto?></td>
            <td><?php echo $nombre_producto ?></td>
            <td><?php echo $cantidad?></td>
            <td><?php echo "L. ".number_format($precio, 2) ?></td>
            <td><?php echo "L. ".number_format($total, 2) ?></td>
            <td><a href="javascript:eliminar(<?php echo $idproducto ?>)" class="btn btn-danger">Eliminar</a></td>
          </tr>
          <?php
          $total_pago = $total_pago + $total;
        }
        } else {
           
        }
        } else {
        echo "No se pudo preparar la consuta";
        }
      ?>
    </tbody>
  </table>
  <h5>Total a pagar: <?php echo "L. ".number_format($total_pago, 2) ?></h5>
</div>

<script>
        function eliminar(idproducto)
        {
            var url = '<?php echo $urlweb ?>services/ws_admin_carrito.php?accion=eliminar';

            fetch(url,
            {
                method: 'POST',
                body: JSON.stringify({
                    "idproducto":idproducto
                })
            })
            .then((response) => response.json())
            .then((data) => {
                alert(data.text);
                const row = document.getElementById(idproducto);
                row.remove();
            })
            .catch(console.error)
        }
    </script>
