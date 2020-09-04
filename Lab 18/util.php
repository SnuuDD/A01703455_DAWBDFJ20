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
    cerrarConexion($conexion);
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
    $table .= "<blockquote><h5>NO HAY REGISTROS QUE MOSTRAR</h5></blockquote>";
}
    
    
    return $table;
    
    
}



function getChampByAJAX($search=""){
    
    $conexion = conexionBD();
     $table = "";
    //echo $query;
    if($search != ""){
        $query = "SELECT * FROM `champs`";
        $query .= " WHERE nombre LIKE '%".$search."%'";
        $result = mysqli_query($conexion, $query);
    
   
    
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
    }else{
        $table .= "<div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <div class=\"card orange lighten-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">No se encontró ningún Champion llamado \"".$search."\"</span>
                </div>
            </div>
        </div>
    </div>";
      }
    }


    
    
    cerrarConexion($conexion);
    return $table;
    
    
}

function addChamp($name,$region,$rol,$clase){

    $conexion = conexionBD();
    $query = "INSERT INTO `champs` (`id`, `nombre`, `region`, `rol`, `clase`) VALUES (NULL, '$name', '$region', '$rol', '$clase');";
    if(mysqli_query($conexion, $query)){
       $res.= '<blockquote id="user"><h5>EL REGISTRO SE A AÑADIDO EXITOSAMENTE</h5></blockquote>';
    }
        else {
        $res = "<blockquote><h5>ERROR: ".$query."<br>".mysqli_error($conexion)."</h5></blockquote>";
    }
    cerrarConexion($conexion);
    return $res;
}

function borraChampbyName($name){

    $conexion = conexionBD();
    $query = "DELETE FROM `champs` WHERE nombre = '$name'";
    if(mysqli_query($conexion, $query)){
       $res.= '<blockquote id="user"><h5>EL REGISTRO SE A <strong>BORRADO</strong> EXITOSAMENTE</h5></blockquote>';
    }
        else {
        $res = "<blockquote><h5>ERROR: ".$query."<br>".mysqli_error($conexion)."</h5></blockquote>";
    }
    cerrarConexion($conexion);
    return $res;
}


?>
