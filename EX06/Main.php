<?php

require_once 'Semaforo.php';
require_once 'Mediator.php';

$mediator = new Mediator();

$semaforoNorte = new Semaforo('Norte', $mediator);
$semaforoSul = new Semaforo('Sul', $mediator);
$semaforoLeste = new Semaforo('Leste', $mediator);
$semaforoOeste = new Semaforo('Oeste', $mediator);

$mediator->adicionarSemaforo($semaforoNorte);
$mediator->adicionarSemaforo($semaforoSul);
$mediator->adicionarSemaforo($semaforoLeste);
$mediator->adicionarSemaforo($semaforoOeste);

// Inicia o semáforo Norte com o verde
$semaforoNorte->mudarEstado('verde', 30);

// Simula a passagem do tempo
for ($i = 0; $i < 120; $i++) {
    echo "Tempo: $i segundos\n";
    $semaforoNorte->tick();
    $semaforoSul->tick();
    $semaforoLeste->tick();
    $semaforoOeste->tick();
    sleep(1);
}
