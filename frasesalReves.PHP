<?php

public function FrasesalReves(){
$frase = "Bienvenido a Treda Solutions";

$vec = array(explode(" ",$frase));

for (intval i = 0; i < count($vec); i++)
{
    
    if (count($vec[i])>5) {
        $FraseAux = vec[i];
        $FraseDevuelta="";
        for (intval j = count($raseAux)-1; j >=0; j--)
        {
            $FraseDevuelta += $FraseAux[j];
        }

        $vec[i] = $FraseDevuelta;
    }

}

//Imprimir Frase devuelta
for (intval i = 0; i < count(vec); i++)
{
   echo .vec[i] .' ';
} 



}
?>