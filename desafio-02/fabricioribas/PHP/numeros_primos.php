<?php 

for ($i= 1; $i  <=10000 ; $i++) { 
     
    $divisor = 0;
     
     for($j = $i; $j >= 1; $j--)
     {
        //  retorna o resto da divisão
         if (($i % $j) == 0) {
             $divisor++;
         }
     }

     if ($divisor == 2)
     {
        echo $i . "</br>";
     }
 }