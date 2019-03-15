<?php

print "Preço incial da marcedoria: ";

$preco_inicial = (float) fgets(STDIN);

print "Porcentagem de desconto: ";
$porcentagem_de_desconto = (float) fgets(STDIN);

$desconto= $porcentagem_de_desconto/100;

$desconto_real= $desconto*$preco_inicial;

$preco_final= $preco_inicial-$desconto_real;

print "\nO desconto foi de: $desconto_real reais\nO preço final é de: $preco_final reais";
