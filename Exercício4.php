<?php

print "Preço incial da marcedoria: ";

$precoinicial = (float) fgets(STDIN);

print "Porcentagem de desconto: ";
$porcentagemdedesconto = (float) fgets(STDIN);

$desconto= $porcentagemdedesconto/100;

$descontoreal= $desconto*$precoinicial;

$precofinal= $precoinicial-$descontoreal;

print "\nO desconto foi de: $descontoreal reais\nO preço final é de: $precofinal reais";
