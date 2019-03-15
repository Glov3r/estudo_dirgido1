<?php
print "Quantidade de Km percorridos: ";

$km_percorridos = (float) fgets(STDIN);

print "Quantidade de dias que o carro foi alugado: ";

$dias_carro_alugados = (float) fgets(STDIN);

$aluguel_por_dia= $dias_carro_alugados*60;

$aluguel_por_km= $km_percorridos*0.15;

$preco_total= $aluguel_por_dia+$aluguel_por_km;

print "\nO Preço total a pagar por km: $aluguelporkm reais\nO Preço total a pagar por dia: $aluguelpordia reais\nO Preço total a pagar: $precototal reais";
