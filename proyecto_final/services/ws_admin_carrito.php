<?php
require "../config.php";
$accion = isset($_GET["accion"]) ? $_GET["accion"] : "default";
$text = "Desconocido";

    switch($accion)
    {
        case "eliminar":
            $json = file_get_contents('php://input');
            $data = json_decode($json);
            if (isset($data)) {
                $strsql = "DELETE FROM carrito WHERE idproducto = ?";
                $stmt = $mysqli->prepare($strsql);
                $stmt->bind_param("i", $data->idproducto);
                $stmt->execute();
                if ($stmt->errno == 0) {
                    $text = "El producto se elimino de manera correcta";
                } else {
                    $text = "No se pudo ejecutar la consulta";
                }
            } else {
                $text = "No se recibieron los parametros correctos";
            }
        break;
    }

    $jsonreturn = array(
        "text" => $text
    );

    echo json_encode($jsonreturn)
?>