<?php

print "Temperatura em ºC: ";

$temperatura_em_C = (float) fgets(STDIN);

$temperatura_em_F= 9*$temperatura_em_C/5+32;

print "$temperatura_C ºC em Fahrenheit, são: $temperatura_em_F ºF";
