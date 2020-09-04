<?php

function conexionBD(){

    //Funcion que genera la conexion con la BD, mediante una Query a Msqli
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bdname = "lolchamps";

    $conexion = mysqli_connect($server,$user,$pass,$bdname);

    if (!$conexion) {
        die("Conexion FALLIDA: ".mysqli_connect_error());
    }

    return $conexion;

}

function cerrarConexion($conexion){
    mysqli_close($conexion);
}

function getChamps(){
    $conexion = conexionBD();
    $query = "SELECT * FROM champs";
    $result = mysqli_query($conexion, $query);
    cerrarConexion($conexion);

    $table ="";

    if(mysqli_num_rows($result)){
        $table .="<table class=\"responsive-table\">";
        $table .="<thead><tr><th>ID</th><th>Nombre</th><th>Region</th><th>Rol</th><th>Clase</th></thead>";
        while($row = mysqli_fetch_assoc($result)){   
            $table.= "<tr><tbody>";
            $table.= "<td>". $row["id"]. "</td>";
            $table.= "<td>". $row["nombre"]. "</td>";
            $table.= "<td>". $row["region"]. "</td>";
            $table.= "<td>". $row["rol"]. "</td>";
            $table.= "<td>". $row["clase"]. "</td>";
            $table.= "</tbody></tr>";
        }
        $table.= "</table>";
    }

    return $table;

}

function getChampByRegion($region){
    
    $conexion = conexionBD();
    $query = "SELECT * FROM `champs` WHERE region = '$region'";
    $result = mysqli_query($conexion, $query);
    
    $table = "";
    
    if(mysqli_num_rows($result)){
        $table .= "<table class=\"responsive-table\">";
        $table .="<thead><tr><th>ID</th><th>Nombre</th><th>Region</th><th>Rol</th><th>Clase</th></thead>";
        while($row = mysqli_fetch_assoc($result)){   
            $table.= "<tr><tbody>";
            $table.= "<td>". $row["id"]. "</td>";
            $table.= "<td>". $row["nombre"]. "</td>";
            $table.= "<td>". $row["region"]. "</td>";
            $table.= "<td>". $row["rol"]. "</td>";
            $table.= "<td>". $row["clase"]. "</td>";
            $table.= "</tbody></tr>";
        }
        $table.= "</table>";
    }
    
    
    return $table;
    
    
}

function getChampByChar($char){
    
    $conexion = conexionBD();
    $query = "SELECT * FROM `champs` WHERE nombre LIKE '$char%'";
    //echo $query;
    $result = mysqli_query($conexion, $query);
    
    $table = "";
    
    if(mysqli_num_rows($result)){
        $table .= "<table class=\"responsive-table\">";
        $table .="<thead><tr><th>ID</th><th>Nombre</th><th>Region</th><th>Rol</th><th>Clase</th></thead>";
        while($row = mysqli_fetch_assoc($result)){   
            $table.= "<tr><tbody>";
            $table.= "<td>". $row["id"]. "</td>";
            $table.= "<td>". $row["nombre"]. "</td>";
            $table.= "<td>". $row["region"]. "</td>";
            $table.= "<td>". $row["rol"]. "</td>";
            $table.= "<td>". $row["clase"]. "</td>";
            $table.= "</tbody></tr>";
        }
        $table.= "</table>";
    }
        else {
        $table = "<blockquote><h5>NO HAY REGISTROS QUE MOSTRAR</h5></blockquote>";
    }
    
    
    return $table;
    
    
}

?>
