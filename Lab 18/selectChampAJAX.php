<?php
session_start();
require_once("util.php");
   


include("partials/_header.html");
include("partials/_usermsg.html"); 

echo "<div class=\"row\">";
            echo "<div class=\"col s12\">";
            include("partials/_consultaChampAJAX_buscador.html");
            include("partials/_consultaChampAJAX_Res.html");    //cambio, para hacer nuestra tabla de consulta de programas dinamica debemos partir en 2 partials este archivo
            $search = "";
            
            echo getChampByAJAX($search);
            
            include("partials/_consultaChampAJAX_ResD.html");
            echo "</div>";
        echo "</div>";
include("partials/_btnregreso.html");   
include("partials/_footer.html");
///unset($_SESSION["tabla"]);
?>