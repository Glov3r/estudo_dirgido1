<?php

print "Distância a percorrer(Km): ";

$distancia = (float) fgets(STDIN);

print "Velocidade média esperada(Km/h): ";

$velocidademedia = (float) fgets(STDIN);

$tempodeviagem= $distancia/$velocidademedia;

print "Tempo de viagem estimado: $tempodeviagem horas";
