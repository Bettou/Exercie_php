<?php
function fact(int $n){
    if ($n==0){
        return 1;
    }
    else{
        return $n*fact($n-1);
    }
}
$facto= fact((3));
echo"$facto";
?>