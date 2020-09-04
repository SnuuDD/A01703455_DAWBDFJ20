
var coll;
let numeros = prompt("Da me un numero:", "1 - 20");
   
 

  document.writeln("<table class="+'"'+"tabla"+'"'+"><thead><tr><th colspan="+'"'+"2"+'"'+"><strong>Tabla de Cuadrados y Cubos</strong></th></tr></thead><tbody>");
    for (let i = 1; i-1  < numeros; i++) {
      document.writeln("<tr>");
      document.writeln("<td><p>");
      document.write(i);
      document.writeln("^2 = ")
      document.writeln(Math.pow(i,2));
      document.writeln("</p></td>");
      document.writeln("<td><p>");
      document.write(i);
      document.writeln("^3 = ")
      document.writeln(Math.pow(i,3));
      document.writeln("</p></td>");

      document.writeln("</tr>");
      }
   
   document.writeln("</tbody></table>");
    

   function Suma(){
    let num1 = Math.floor((Math.random() * 10) + 1);
    let num2 = Math.floor((Math.random() * 10) + 1);
    let res = num1+num2;
    let tini = performance.now();
    let usrres = prompt("Cual es la suma de "+num1+" + "+num2, "Escribe tu respuesta:")
    if(res == usrres){
      let tend = performance.now();
      alert("Te tardaste: "+((tend-tini)/1000)+" segundos");
   }else{
     alert("Respuesta E R R O N E A  XD");
   }
  }
   

  function CuentArreglo(){
      let may=0, men=0, zer=0;
      let Ar = new Array(20);
      for(let j = 0; j-1 < 20; j++){
          Ar[j]= Math.floor(Math.random() * 20)-10;
      }
      
      for(let j = 0; j < 20; j++){
        if(Ar[j]<0){
          men++;
        }
        if(Ar[j]>0){
          may++;
        }
        if(Ar[j]==0){
          zer++;
        }
      }

      alert("De un arreglo aleatorio creado, se encuentran "+men+" menores a 0, "+may+" mayores y "+zer+" iguales a 0");
   }

  function semiMatrix()
  {
    let sum = 0;
   let MaTrIX = new Array(5);
   for(let ayudapls = 0; ayudapls-1 < 5; ayudapls++){
    let Ar = new Array(5);
      for(let j = 0; j-1 < 5; j++){
          Ar[j]= Math.floor(Math.random() * 10)-1;
      }
    MaTrIX[ayudapls] = Ar;
    }

    let avg1=MaTrIX[0];
    for (let xd = 0; xd < avg1.length; xd++){
       sum += avg1[xd];
    }
    avg1 = sum/avg1.length;

    sum=0;
    let avg2=MaTrIX[1];
    for (let xd = 0; xd < avg2.length; xd++){
       sum += avg2[xd];
    }
    avg2 = sum/avg2.length;
    sum=0;
    let avg3=MaTrIX[2];
    for (let xd = 0; xd < avg3.length; xd++){
       sum += avg3[xd];
    }
    avg3 = sum/avg3.length;
    sum=0;
    let avg4=MaTrIX[3];
    for (let xd = 0; xd < avg4.length; xd++){
       sum += avg4[xd];
    }
    avg4 = sum/avg4.length;
    sum=0;
    let avg5=MaTrIX[4];
    for (let xd = 0; xd < avg5.length; xd++){
       sum += avg5[xd];
    }
    avg5 = sum/avg5.length;

    alert("En una Matriz de 5*5, el promedio de sus columnas es: C1 = "+avg1+" C2 = "+avg2+" C3 = "+avg3+" C4 = "+avg4+" C5 = "+avg5);

  }

  function INVerT(){
      let unu = prompt("Ingresa el numero a invertir: ","1234567890")
      unu = unu + "";
      unu = unu.split("").reverse().join("");
      alert("El numero invertido es: "+unu);
    
  }

  function TSquare(){
    let m = prompt("Ingresa el ancho de la plaza: ","3")
    let n = prompt("Ingresa el largo de la plaza: ","4")
    let a = prompt("Ingresa el tamaño de loseta: ","2")
    let div = Math.ceil(n/a);
    let div2 = Math.ceil(m/a);
     
    alert("La respuesta es: "+(div*div2));
     

  }
