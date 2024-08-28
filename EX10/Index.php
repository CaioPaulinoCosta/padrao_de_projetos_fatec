<?php

require_once 'SuporteBasico.php';
require_once 'SuporteAvancado.php';
require_once 'SuporteEspecializado.php';
require_once 'Requisicao.php';

// Criar os manipuladores
$suporteBasico = new SuporteBasico();
$suporteAvancado = new SuporteAvancado();
$suporteEspecializado = new SuporteEspecializado();

// Configurar a cadeia de responsabilidade
$suporteBasico->setProximo($suporteAvancado);
$suporteAvancado->setProximo($suporteEspecializado);

// Criar diferentes requisições
$requisicaoBasica = new Requisicao('basico');
$requisicaoAvancada = new Requisicao('avancado');
$requisicaoEspecializada = new Requisicao('especializado');
$requisicaoInvalida = new Requisicao('invalido');

// Testar as requisições
$suporteBasico->tratarRequisicao($requisicaoBasica);
$suporteBasico->tratarRequisicao($requisicaoAvancada);
$suporteBasico->tratarRequisicao($requisicaoEspecializada);
$suporteBasico->tratarRequisicao($requisicaoInvalida);
