<?php

function conexionBD(){
    //Funcion que genera la conexion con la BD, mediante una Query a Msqli
    $server = "mysql1008.mochahost.com";
    $user = "dawbdorg_1703455";
    $pass = "1703455";
    $bdname = "dawbdorg_A01703455";

    $conexion = mysqli_connect($server,$user,$pass,$bdname);

    if (!$conexion) {
        die("Conexion FALLIDA: ".mysqli_connect_error());
    }

    return $conexion;

}

function cerrarConexion($conexion){
    mysqli_close($conexion);
}

function getIncidentes(){
    $conexion = conexionBD();
    $query = "SELECT i.id as ID, i.fechayhora as Fecha, l.descripcion as Lugar, t.descripcion as Tipo FROM
     incidente as i, tipo as t, lugar as l WHERE l.id = i.lugar_id 
     AND t.id = i.tipo_id ORDER BY fecha ASC";
    $result = mysqli_query($conexion, $query);
    

    $table ="";

    if(mysqli_num_rows($result)){
        $table .="<table class=\"responsive-table\">";
        $table .="<thead><tr><th>ID</th><th>Fecha y Hora</th><th>Id Lugar</th><th>Id Tipo</th></thead>";
        while($row = mysqli_fetch_assoc($result)){   
            $table.= "<tr><tbody>";
            $table.= "<td>". $row["ID"]. "</td>";
            $table.= "<td>". $row["Fecha"]. "</td>";
            $table.= "<td>". $row["Lugar"]. "</td>";
            $table.= "<td>". $row["Tipo"]. "</td>";
            $table.= "</tbody></tr>";
        }
        $table.= "</table>";
    }
    cerrarConexion($conexion);
    return $table;

}


function getChampByAJAX($search=""){
    
    $conexion = conexionBD();
     $table = "";
    //echo $query;
    if($search != ""){
        $conexion = conexionBD();
        $query = "SELECT i.id as ID, i.fechayhora as Fecha, l.descripcion as Lugar, t.descripcion as Tipo FROM
         incidente as i, tipo as t, lugar as l WHERE l.id = i.lugar_id 
         AND t.id = i.tipo_id";
        $query .= " AND l.descripcion LIKE '%".$search."%'";
        $result = mysqli_query($conexion, $query);
    
   
    
    if(mysqli_num_rows($result)){
        $table .="<table class=\"responsive-table\">";
        $table .="<thead><tr><th>ID</th><th>Fecha y Hora</th><th>Id Lugar</th><th>Id Tipo</th></thead>";
        while($row = mysqli_fetch_assoc($result)){   
            $table.= "<tr><tbody>";
            $table.= "<td>". $row["ID"]. "</td>";
            $table.= "<td>". $row["Fecha"]. "</td>";
            $table.= "<td>". $row["Lugar"]. "</td>";
            $table.= "<td>". $row["Tipo"]. "</td>";
            $table.= "</tbody></tr>";
        }
        $table.= "</table>";
    }else{
        $table .= "<div class=\"row\">
        <div class=\"col s12 m12 l12\">
            <div class=\"card orange lighten-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">No se encontró ningún Incidente en el Area \"".$search."\"</span>
                </div>
            </div>
        </div>
    </div>";
      }
    }


    
    
    cerrarConexion($conexion);
    return $table;
    
    
}

function addIncidente($lugarid,$tipoid){

    $conexion = conexionBD();
    $query = "INSERT INTO `incidente` (`id`, `fechayhora`, `lugar_id`, `tipo_id`) VALUES (NULL, current_timestamp(), '$lugarid', '$tipoid');";
    if(mysqli_query($conexion, $query)){
       $res.= '<blockquote id="user"><h5>EL REGISTRO SE A AÑADIDO EXITOSAMENTE</h5></blockquote>';
    }
        else {
        $res = "<blockquote><h5>ERROR: ".$query."<br>".mysqli_error($conexion)."</h5></blockquote>";
    }
    cerrarConexion($conexion);
    return $res;
}


?>
