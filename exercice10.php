<?php
$tableau=[];
for ($i=0; $i <10 ; $i++) { 
    $tableau[]=rand(0,50);
    
}
if (in_array(42,$tableau)){
    echo"42 est dans le tableau";
}
else {
    echo"42 n'est pas dans le tableau";
}
var_dump($tableau);

?>