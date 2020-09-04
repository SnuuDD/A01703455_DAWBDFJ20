<?php
    session_start();
    require_once("util.php");

    $name = htmlspecialchars($_POST["name"]);
   // console_log($opc);
   $_SESSION["res"] = borraChampbyName($name);
   $_SESSION["tabla"] = getChamps();
    header("location:borraChamp.php");
?>