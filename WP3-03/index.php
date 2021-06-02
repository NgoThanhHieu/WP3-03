 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $apal = 100;
    $botak = 0;
    $hp = 200;
     
     while ($apal > 0 or $hp > 0) 
     {
         $apal -= 10; 
         echo 'Na Apalu zbývá' . $apal . 'surovin';?><br><?php
         for ($i = 0; $i < 6; $i++) { 
             $damage = rand(0,5);
             $hp = $hp - $damage;
             echo 'Loďi zbyvá' . $hp .;?><br><?php  
             if ($hp < 1 ) {
                 echo 'Loď byla zničena';?><br><?php 
                 break;
            }
         }
         $botak += 10 ;
         echo 'V Botaku se nachází ve skladu ' . $botak . ' surovin';?><br><?php 
         if ($botak > 99) {
            echo 'Všechny suroviny jsou ve skladu';?><br><?php 
            break;   

        }
     }     
     ?>
  
    
</body>
</html>