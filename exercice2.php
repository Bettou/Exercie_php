<?php

use LDAP\Result;

function affichage($n){
    if($n<>0){
        echo"$n";
        affichage($n-1);

    }
}
affichage(10);
?>