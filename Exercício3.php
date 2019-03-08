<?php

print "Salário incial: ";

$salarionicial = (float) fgets(STDIN);

print "Porcentagem de aumento: ";

$porcentagemaumento = (float) fgets(STDIN);

$porcentagemreal= $porcentagemaumento/100;

$aumentosalarial= $salarionicial*$porcentagemreal;

$salariofinal= $salarionicial+$aumentosalarial;

print "\nO aumento foi de: $aumentosalario reais\nO salário final foi: $salariofinal reais";
