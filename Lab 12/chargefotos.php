<?php
session_start();


include("partials/_header.html");
include("partials/_usermsg.html"); 
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        echo "<blockquote><h6>Archivo de Tipo Imagen Valido - " . $check["mime"] . ".</h6></blockquote>";
        $uploadOk = 1;
    } else {
        echo "<blockquote><h6>El archivo seleccionado <strong>no es una imagen bro wtf no es tan dificil</strong>.</h6></blockquote>";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "<blockquote><h6>El archivo seleccionado <strong>ya existe</strong>.</h6></blockquote>";
    $uploadOk = 0;
}
if ($_FILES["imagen"]["size"] > 5000000) {
    echo "<blockquote><h6>El archivo seleccionado es <strong>demasiado grande</strong>.</h6></blockquote>";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<blockquote><h6>El archivo seleccionado debe ser un <strong>JPG, JPEG, PNG o GIF</strong>.</h6></blockquote>";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "<blockquote><h5>Lo sentimos, tu archivo <strong>NO SE CARGO</strong>.</h5></blockquote>";

} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "<blockquote><h5>El archivo <strong>". basename( $_FILES["imagen"]["name"]).$imageFileType. " ha sido cargado EXITOSAMENTE.</strong></h5></blockquote>";
    } else {
        echo "<blockquote><h5>Lo sentimos, <strong>Nhubo un error al cargar tu archivo/strong>.</h5></blockquote>";
    }
}
include("partials/_btnregreso.html");   
include("partials/_footer.html");

?>