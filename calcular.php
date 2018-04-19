<?php
    
function calcular($op, $n1, $n2)
{
    if(!strcmp("Suma", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1+$n2)."</p>";
    }
    
    if(!strcmp("Resta", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1-$n2)."</p>";
    }
    
    if(!strcmp("Multiplicación", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1*$n2)."</p>";
    }
    
    if(!strcmp("División", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1/$n2)."</p>";
    }
    
    if(!strcmp("Módulo", $op))
    {
        echo "<p class='resultado' >El resultado es: ".($n1%$n2)."</p>";
    }
    
    if(!strcmp("Incremento", $op))
    {
        $n1++;
        echo "<p class='resultado' >El resultado es: ".$n1."</p>";
    }
    
    if(!strcmp("Decremento", $op))
    {
        $n1--;
        echo "<p class='resultado' >El resultado es: ".$n1."</p>";
    }   
}
