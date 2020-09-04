function buscarP() {
    //$.post manda la petición asíncrona por el método post. También existe $.get
    console.log("hola");
    $.post("controladorConsultaPrograma.php", {
        Nombre: document.getElementById("Programa").value
        }).done(function (data) {
        $("#resultadoPrograma").html(data);
    });
}


//Si nuestro elemento existe entonces deberíamos 
//Asignar al botón buscar, la función buscar() correspondiente
if ($('#Programa').length > 0) {
    document.getElementById("Programa").onkeyup = buscarP;
}

function revisarForm(){
    let e=document.getElementById("areas").value; //alert(e);
     if(e===""){
         
          alert("Por favor, seleccione un area.");
         return false;
     }
  }
  
  
  if ($('#test').length > 0) {
    document.getElementById("test").onclick = revisarForm;
  }

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