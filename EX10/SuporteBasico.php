<?php

require_once 'SuporteHandler.php';
require_once 'Requisicao.php';

class SuporteBasico implements SuporteHandler
{
    private ?SuporteHandler $proximo = null;

    public function setProximo(SuporteHandler $proximo): void
    {
        $this->proximo = $proximo;
    }

    public function tratarRequisicao(Requisicao $requisicao): void
    {
        if ($requisicao->getTipo() === 'basico') {
            echo "Suporte Básico: Tratando a requisição.\n";
        } elseif ($this->proximo !== null) {
            echo "Suporte Básico: Passando para o próximo.\n";
            $this->proximo->tratarRequisicao($requisicao);
        } else {
            echo "Suporte Básico: Não há próximo manipulador.\n";
        }
    }
}
