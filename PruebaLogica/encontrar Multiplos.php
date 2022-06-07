<?php

public function encontrarMultiplos(intval $n=15){
echo "Cual es el número?";


if ($n <= 3)
{
    echo"El número debe ser superior a 3";
    ;
    return;
}

intval $Mult3 = 3;
intval $Mult5 = 5;
intval $sumaMultiplos = $Mult3 + $Mult5;

if ($n!= 4 || $n!= 6)
{
    $Mult3 = 0;
    $Mult5 = 0;
    $sumaMultiplos = 0;
}

for (intval i = 0; i < $n / 3; i++)
{

    $Mult3 += 3;
    if ($Mult3 < $n)
    {
        $sumaMultiplos += $Mult3;
    }

    $Mult5 += 5;
    if ($Mult5 < $n)
    {
        $sumaMultiplos += $Mult5;
    }

}

echo .$sumaMultiplos.;

}
?>