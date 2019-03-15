<?php

print "Salário incial: ";

$salario_inicial = (float) fgets(STDIN);

print "Porcentagem de aumento: ";

$porcentagem_aumento = (float) fgets(STDIN);

$porcentagem_real= $porcentagem_aumento/100;

$aumento_salarial= $salario_inicial*$porcentagem_real;

$salario_final= $salario_inicial+$aumento_salarial;

print "\nO aumento foi de: $aumento_salario reais\nO salário final foi: $salario_final reais";
