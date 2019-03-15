<?php

print "Quantidade de cigarros fumados por dia: ";

$cigarros_fumados = (int) fgets(STDIN);

print "Anos que você fumou: ";

$anos_fumando = (int) fgets(STDIN);

$minutos_vida_perdidos= ($cigarros_fumados+($anos_fumando*365))*10;

$dias_vida_perdidos= $minutosvidaperdidos/1440; /*1440 são quantos minutos há em um dia*/

$dias_vida_perdidos= round($dias_vida_perdidos);

print "\nA quantidade de minutos perdidos de vida é de: $minutosvidaperdidos minutos\nA quantidade de dias perdidos de vida é de: $diasvidaperdidos dias";
