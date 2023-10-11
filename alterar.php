<?php

include_once("conexao.php");

    if(!isset($_POST["carro"]))
     header("location: index.php");

    $id = $_POST ["id"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $km = $_POST["km"];
    $ano = $_POST ["ano"];
    $cor = $_POST ["cor"];
    $quantos_lugares = $_POST ["quantos_lugares"];
    $combustivel = $_POST ["combustivel"];
    $cambio = $_POST ["cambio"];
    $motor = $_POST ["motor"];

   echo  $sql ="UPDATE carro SET modelo='$modelo', marca='$marca', km='$km', ano='$ano', cor='$cor', quantos_lugares='$quantos_lugares', combustivel='$combustivel', cambio='$cambio', motor='$motor' WHERE pk_carro = $id  ";

    mysqli_query ($conn,$sql);

    if(mysqli_error($conn)=='')

        header("location: index.php");

?>