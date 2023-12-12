<?php
Function calculTriangle($c1, $c2, $c3){
    $message = "";
    $pg = 0;
    $cote2 = 0;
    $cote3 = 0;
    if ($c1 == $c2 && $c2 == $c3){
        $message = "le triangle est équilatéral";
    }
    else {
        if ($c1 >= $c2 && $c1 >= $c3){
            $pg = $c1;
            $cote2 = $c2;
            $cote3 = $c3;
        }
        else {
            if ($c2 >= $c1 && $c2 >= $c3){
                $pg = $c2;
                $cote2 = $c1;
                $cote3 = $c3;
            }
            else{
                $pg = $c3;
                $cote2 = $c1;
                $cote3 = $c2;
            } 
        }
        if ($pg < ($cote2 + $cote3)){
            if (round(pow($pg,2)) == round(pow($cote2,2)) + round(pow($cote3,2))) {
                if ($cote2 == $cote3){
                    $message = "le triangle est isocèle et rectangle";
                } 
                else {
                    $message = "le triangle est rectangle";
                }
            }
            else{
                if ($c1 == $c2 || $c2 == $c3 || $c1 == $c3){
                    $message = "le triangle est isocèle";
                }
                else{
                    $message = "le triangle est quelconque";
                }
            }
        }
        else {
            $message = "Ces dimentions ne peuvent pas être celles d'un triangle";
        }
    }
    return $message;
}
?>