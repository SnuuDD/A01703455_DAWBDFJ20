<?php

    //Promedio
    function average($input) {
        $n=0;
        foreach ($input as $i) {
          $n+=$i;
        }
        return($n/sizeof($input));
    }
    //Mediana
    function mid($input){
        sort($input);
        return $input[sizeof($input)/2];
    }
    
    //Despliega Arreglo
    function showArg($input,$mewamatar) {
        if ($mewamatar==1) {
            sort($input);
        } else {
            rsort($input);
        }
        
        
        $n= "=> ";
        foreach ($input as $i) {
          $n = $n.$i." / ";
        }
        $n= $n."<=";
        return($n);
    }
    //Imprime una tubla wtf


    function showTb($input){
        $table="<table class=\"striped\"><thead><tr><th>Valor</th><th>Valor al 🔲</th><th>Valor al 🧊</th></tr></thead><tbody>";
        for($num=1;$num<=$input;$num++){
          $table =$table ."<tr><td>".$num."</td>"."<td>".pow($num,2)."</td>"."<td>".pow($num,3)."</td></tr>";
        }
        $table."</tbody></table>";
        return $table;
      }

  





?>