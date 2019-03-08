<?php


print "Quantidade de dias: ";

$diasquantidade = (int) fgets(STDIN);

print "Quantidade de horas: ";

$horasquantidade = (int) fgets(STDIN);

print "Quantidade de minutos: ";

$minutosquantidade = (int) fgets(STDIN);

print "Quantidade de segundos: ";

$segundosquantidade = (float) fgets(STDIN);

$diasparasegundos = $diasquantidade*24*60*60;

$horasparasegundos = $horasquantidade*60*60;

$minutosparasegundos = $minutosquantidade*60;

  $segundostotais = $diasparasegundos+$horasparasegundos+$minutosparasegundos+$segundosquantidade;
