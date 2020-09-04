<?php
    session_start();
    require_once("util.php");

    $lugarid = htmlspecialchars($_POST["lugarid"]);
    $tipoid = htmlspecialchars($_POST["tipoid"]);
   // console_log($opc);
   $_SESSION["res"] = addIncidente($lugarid,$tipoid);
   $_SESSION["tabla"] = getIncidentes();
    header("location:formularioIncidente.php");
?>