<?php
    $archivo = fopen("../../data-repositorios/repositorios.json","r+");
    $linea="";
    $agregar=0;
    while(($linea=fgets($archivo))){
        $registrar=json_decode($linea,true);
        if($registrar["repositorio"]==$_POST["repositorio"]){
            fclose($archivo);
            $respuesta["codigo"]=0;
            $respuesta["mensaje"]="peticion realizada sin exito";
            echo json_encode($respuesta);
            $agregar=1;
            exit();
        }
    }

    if($agregar==1){
        fclose($archivo);
    }else{
        fwrite($archivo,json_encode($_POST)."\n");
        fclose($archivo);
        $respuesta["codigo"]=1;
        $respuesta["mensaje"]="peticion realizada con exito";
        echo json_encode($respuesta);
    }
     
?>