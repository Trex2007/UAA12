<?php
    function fonctionSpecial($nd, $nt)
    {
        $suite = "".$nd." ";
        for ($i = 1 ; $nt >= $i ; $i++){
            if (($nd < 5) && ($nd %3 != 0)){
                $nd = $nd * 5;
            }
            else if (($nd > 5) && ($nd < 10)){
                $nd = $nd / 6;
            }
            else{
                $nd = $nd * $nd;
            }
            $suite = $suite . $nd." ";
        }
        return $suite;
    }
?>
<?php
    function AlgoEucl($nbr1, $nbr2)
    {
        $PGCD = $nbr2;
        while($PGCD != 0) {
            $PGCD = $nbr1 %$nbr2;
            $nbr1 = $nbr2;
            $nbr2 = $PGCD;
          } 
        return $nbr1;
    }
?>