<?php

print "Temperatura em ºC: ";

$temperaturaemC = (float) fgets(STDIN);

$temperaturaemF= 9*$temperaturaemC/5+32;

print "$temperaturaC ºC em Fahrenheit, são: $temperaturaemF ºF";
