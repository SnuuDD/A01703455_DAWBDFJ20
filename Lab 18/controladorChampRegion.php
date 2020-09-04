<?php
    session_start();
    require_once("util.php");

    $opc = htmlspecialchars($_POST["opcion"]);
   // console_log($opc);
    $_SESSION["tabla"] = getChampByRegion($opc);
    header("location:selectChampRegion.php");
?>