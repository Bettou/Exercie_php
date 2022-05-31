<?php
function fact($n){
    $p=1;
    for($i=1;$i<=$n;$i++){
        $p=$p*$i;   
    }
    return $p;
}
$resultat= fact(5);
echo"$resultat";
?>