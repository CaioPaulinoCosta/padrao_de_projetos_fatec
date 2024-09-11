<?php
require_once 'controle/ControleRemoto.php';
require_once 'interprete/InterpreteComandos.php';
require_once 'comando/LigarLuz.php';
require_once 'comando/DesligarLuz.php';
require_once 'comando/AjustarTemperatura.php';

// Testando o padrão Command
$controle = new ControleRemoto();
$comandoLuz = new LigarLuz();
$controle->definirComando($comandoLuz);
$controle->executarComando(); // Deve ligar a luz
$controle->desfazerComando();  // Deve desfazer a ação e desligar a luz

$comandoTemperatura = new AjustarTemperatura(22);
$controle->definirComando($comandoTemperatura);
$controle->executarComando(); // Deve ajustar a temperatura para 22 graus
$controle->desfazerComando();  // Deve desfazer o ajuste de temperatura

// Testando o padrão Interpreter
$interprete = new InterpreteComandos();
$comando = $interprete->interpretar("ligar a luz");  // Deve interpretar e ligar a luz
if ($comando) {
    $controle->definirComando($comando);
    $controle->executarComando();
}

$comando = $interprete->interpretar("ajustar temperatura para 25 graus");  // Deve ajustar a temperatura
if ($comando) {
    $controle->definirComando($comando);
    $controle->executarComando();
}
