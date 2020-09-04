let cT = document.getElementById("canTaza");
let cL = document.getElementById("canLapiz");
let cP = document.getElementById("canLapicero");
let oT = document.getElementById("vTaza");
let oL = document.getElementById("vLapiz");
let oP = document.getElementById("vLapicero");


oT.innerHTML = cT.value;
oL.innerHTML = cL.value;
oP.innerHTML = cP.value;

cT.oninput = function() {
  oT.innerHTML = this.value;
}
cL.oninput = function() {
  oL.innerHTML = this.value;
}
cP.oninput = function() {
  oP.innerHTML = this.value;
}

function Total(){
    let res = 0;
    let cT2= document.getElementById("canTaza").value;
    let cL2= document.getElementById("canLapiz").value;
    let cP2 = document.getElementById("canLapicero").value;
    res = ((cT2*10)+(cL2*15)+(cP2*18));
    alert("El total que pagaras por los 3 articulos es: $"+res);
}




function validaPass(form)
  {
    if(form.con1.value == ""){
          alert("La contraseña no puede estar vacia");
          return false;
     }
    if(form.con1.value.length < 8){
        alert("La contraseña debe contener al menos 8 caracteres");
        form.con1.focus();
        return false;
    }

    if(form.con1.value == form.con2.value){
        
        caracteres = /[0-9][a-z][A-Z]/;
        if(!caracteres.test(form.con1.value)) {
          alert("Tu contraseña debe contener una mayuscula, una minuscula y un numero");
          form.con1.focus();
          return false;
        }
      

    }
    else{
        alert("E R R O R: Las contraseñas son diferentes");
        form.con1.focus();
        return false;

    }
    
    alert("La contraseña ingresada es una contraseña valida: " + form.con1.value);
    return true;

}

function operaNumes(form){
  console.log(form.Name.value);
  
    if(Suma)
    {
      alert("El resultado es: "+(form.n1.value+form.n2.value));
    }
    if(Resta)
    {
      alert("El resultado es: "+(form.n1.value-form.n2.value));
    }
    if(Division)
    {
      alert("El resultado es: "+(form.n1.value/form.n2.value));
    }
    if(Multiplicacion)
    {
      alert("El resultado es: "+(form.n1.value*form.n2.value));
    }

}