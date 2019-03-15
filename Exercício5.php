<?php

print "Distância a percorrer(Km): ";

$distancia = (float) fgets(STDIN);

print "Velocidade média esperada(Km/h): ";

$velocidade_media = (float) fgets(STDIN);

$tempo_de_viagem= $distancia/$velocidade_media;

print "Tempo de viagem estimado: $tempo_de_viagem horas";
