function cambiaColor(){
  //alert("El texto ha cambiado de color OwO");
  let texto = document.getElementById("cambiacolor");
  texto.style.color = getRandomColor();
  texto.style.fontFamily = "Impact,Charcoal,sans-serif";
  texto.style.fontSize = "1.4em";
  texto.style.textAlign = "center";
}

function infoConvid(){
  //alert("El texto se ha desplegado);
  document.getElementById("dinamiConvid").style.visibility = "visible";

}

function timer(){
  //alert("El texto se ha desplegado);
  setTimeout(infoConvid,5000);

}

function getRandomColor() {
  let letters = '0123456789ABCDEF';
  let color = '#';
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

document.getElementById("cambiacolor").onclick = cambiaColor;
document.getElementById("convid").onmouseover = timer;
document.getElementById("watermark").draggable = true;

//Probando DnD (Drag and Drop)


let mark = document.getElementById('watermark');

//Evento DragStart
document.addEventListener("dragstart", function(event) {
  //Seleccionamos el tipo de informacion a transferir
  event.dataTransfer.setData("Text", event.target.id);
  //Mensaje desplegable en el Div Contenedor donde se arrastrara el texto
  document.getElementById("contenedor").innerHTML = '<h3 id="desplegable">Arrastralo hasta aqui.</h3>';
  //Propiedadees del texto u elmento arrastrado
  event.target.style.opacity = "0.14";
  event.target.style.fontSize = "1.9em";
});

//Evento Drag
mark.addEventListener("drag", function(event) {
  document.getElementById("contenedor").style.opacity = "0.3";
});
//Evento DragEnd
document.addEventListener("dragend", function(event) {
  document.getElementById("contenedor").innerHTML = '<h3>No llego el elemento</h3>';
  event.target.style.opacity = "0.7";
  document.getElementById("contenedor").style.opacity = "0.5";
  document.getElementById("contenedor").style.color = "red";
  document.getElementById("contenedor").style.borderColor = "transparent";

})

//Eventro DragEnter

document.addEventListener("dragenter", function(event) {
  if ( event.target.className == "contenedor" ) {
    event.target.style.border = "0.15em dotted gray";
  }
});

//Evento Drag Over
document.addEventListener("dragover", function(event) {
  event.preventDefault();
});

// When the draggable p element leaves the droptarget, reset the DIVS's border style
document.addEventListener("dragleave", function(event) {
  if ( event.target.className == "contenedor" ) {
    //event.target.style.border = "";
  }
});


document.addEventListener("drop", function(event) {
  event.preventDefault();
  console.log("BroUTF");
  if ( event.target.className == "contenedor" ) {
    document.getElementById("contenedor").style.color = "";
    event.target.style.border = "";
    var data = event.dataTransfer.getData("Text");
    
    event.target.appendChild(document.getElementById(data));
    document.getElementById("contenedor").innerHTML = '<div id="ono"><h3>Jesus Morales - A01703455</h3></div>';
    console.log(data)
    console.log("BroWTF");
  }
});