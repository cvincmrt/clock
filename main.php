<?php

/*
         Patria sem :
         If, else     -vetvenie, rozhodovanie
         Switch       -vetvenie, rozhodovanie
         For, Foreach     -cykly, opakovanie
         While, Do While  -cykly, opakovanie
         */
        
        //if, else
        
//        if ($vek > 18) {
//            echo 'Dostanes vodicak<br>';
//        } else {
//            echo 'nedostanes vodicak<br>';
//        }
        
        
        
//        if ($vek < 18) {
//             echo 'nedostanes vodicak<br>';
//        }elseif ($vek < 90) {
//             echo 'dostanes vodicak<br>';
//        } else {
//             echo 'nedostanes vodicak<br>';
//        }
        
$vek = $_POST['vek'];

// empty() skontroluj ci premenna je prazdna cize prazdna znamena("", 0, 0.0, NULL, FALSE, array(), "0")
//!empty() toto je negácia
// isset() snazi sa zistit ci premenna je hocico ine ako null(navratova hodnota true/false)
// uset() 
// var_dump() povedz mi co v tej premennej je,aky typ a kde sa nachadza
// funkcia header('Location: http://www.google.com/') - presmeruje ma na google


if (empty($_POST['vek'])) {
    echo 'Nezadal si hodnotu pre vek';
} else {
    
}

//        if ($vek >= 18 and $vek < 90){
//             echo 'dostanes vodicak<br>';
//        } else {
//            echo 'nedostanes vodicak<br>';}
