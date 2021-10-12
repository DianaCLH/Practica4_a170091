<?php

  require_once "lib/nusoap.php";

  function getProductos($datos) {
    if ($datos == "Productos") {
      return join(",", array(
        "Corrector de ojeras",
        " Mascara de pestañas",
        " Pincel para cejas",
        " Labial"));
    }
    else {
      return "No hay productos";
    }
  }
  $server = new soap_server();
  $server->register("getProductos");
  if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>
