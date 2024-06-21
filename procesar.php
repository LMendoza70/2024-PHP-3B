<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $nombre = !empty($_POST['name']) ? htmlspecialchars( trim($_POST['name'])): "El nombre es requerido";

        if(!empty($_POST['email'])){
            $correo=htmlspecialchars(trim($_POST['email']));
        }else{
            $correo="El correo es requerido";
        }

        $mensaje= !empty($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje'])) : "El mensaje es requerido";

        if($nombre!= "El nombre es requerido" && $correo != "El correo es requerido" && $mensaje!="El mensaje es requerido"  ){
            echo "Hola : ". $nombre ." Tu email es : ". $correo;
        }else{
            echo "Porfavor llena los campos solicitados....";
        }


        for ($i=0; $i < 10 ; $i++) { 
            echo "esto es la vuelta ". $i ." de 10 <br>";
        }

        $array = array(15, 10, 3, 4);
        foreach ($array as &$valor) {
            echo "tomo el valor ". $valor ."  ";
            $valor = $valor * 2;
            echo "lo convirtio en ". $valor ."<br>";

        }

    }

    //conceptos basicos de php
    // public int x=0; c#
    // var x=0; x="hola" js maneja tipado dinamico 
    // $x=0 $x="hola" $C=5000
    //tipos de datos  int flotantes strings array object
    //estructuras de control selectivas iterativas if else if swhict operador ternario 
    
    
    
?>