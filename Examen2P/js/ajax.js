
//OOOOOOOOOOOOOOOOOOOOOOOOOWWWWWWWWWWWWWWWWWWWWWOOOOOOOOOOOOOOOOO
function buscarChampAJAX() {
    //$.post manda la petición asíncrona por el método post. También existe $.get
    console.log("xdxd me wa morir jajaj");
    $.post("controladorChampAJAX.php", {
        search: document.getElementById("Champion").value
        }).done(function (data) {
        $("#resultadoChampAJAX").html(data);
    });
}


//Si nuestro elemento existe entonces deberíamos 
//Asignar al botón buscar, la función buscar() correspondiente
if ($('#Champion').length > 0) {
    document.getElementById("Champion").onkeyup = buscarChampAJAX;
}