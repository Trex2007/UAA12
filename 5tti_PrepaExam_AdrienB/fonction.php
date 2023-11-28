<?php 
Function calculContract($age, $permi, $accident, $anciennete){
    if ($age < 25 && $permi < 2)
    {
        if ($accident == 0)
        {
            $message = "Rouge";
        }
        else
        {
            $message = "Refus";
        }
    }

    else if (($age < 25 && $permi >= 2) || ($age >= 25 && $permi < 2))
    {
        if ($accident == 0)
        {
            $message = "Orange";
        }
        else if ($accident == 1)
        {
            $message = "Rouge";
        }
        else
        {
            $message = "Refus";
        }
    } 
    else
    {
        if ($accident == 0)
        {
            $message = "Vert";
        }
        else if ($accident == 1)
        {
            $message = "Orange";
        }
        else if ($accident == 2)
        {
            $message = "Rouge";
        }
        else
        {
            $message = "Refus";
        }
    }
    if ($anciennete > 5)
    {
        // écriture façon if ; else
        if ($message == "Rouge")
        {
            $message = "Orange";
        }
        else if ($message == "Orange")
        {
            $message = "Vert";
        }
        else if ($message == "Vert")
        {
            $message = "Bleu";
        }
    }
    return $message;
}
?>