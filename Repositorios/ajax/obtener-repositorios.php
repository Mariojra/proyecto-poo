<?php
    $archivo = fopen("../../data-repositorios/repositorios.json","r");
    $linea = "";
    $respuesta = array();
    while(($linea=fgets($archivo))){
        $usuarios = json_decode($linea,true);
        $respuesta[] = $usuarios;
    }
    fclose($archivo);
    echo json_encode($respuesta);
?>