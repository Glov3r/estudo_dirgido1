<?php


print "Quantidade de dias: ";

$dias_quantidade = (int) fgets(STDIN);

print "Quantidade de horas: ";

$horas_quantidade = (int) fgets(STDIN);

print "Quantidade de minutos: ";

$minutos_quantidade = (int) fgets(STDIN);

print "Quantidade de segundos: ";

$segundos_quantidade = (float) fgets(STDIN);

$dias_para_segundos = $dias_quantidade*24*60*60;

$horas_para_segundos = $horas_quantidade*60*60;

$minutos_para_segundos = $minutos_quantidade*60;

  $segundos_totais = $dias_para_segundos+$horas_para_segundos+$minutos_para_segundos+$segundos_quantidade;
