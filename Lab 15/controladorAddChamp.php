<?php
    session_start();
    require_once("util.php");

    $name = htmlspecialchars($_POST["name"]);
    $rol = htmlspecialchars($_POST["rol"]);
    $region = htmlspecialchars($_POST["opcion"]);
    $clase = htmlspecialchars($_POST["clase"]);
   // console_log($opc);
   $_SESSION["res"] = addChamp($name,$region,$rol,$clase);
   $_SESSION["tabla"] = getChamps();
    header("location:formularioChamp.php");
?>