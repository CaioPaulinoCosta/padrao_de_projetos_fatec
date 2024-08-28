<?php

require_once 'SuporteHandler.php';
require_once 'Requisicao.php';

class SuporteAvancado implements SuporteHandler
{
    private ?SuporteHandler $proximo = null;

    public function setProximo(SuporteHandler $proximo): void
    {
        $this->proximo = $proximo;
    }

    public function tratarRequisicao(Requisicao $requisicao): void
    {
        if ($requisicao->getTipo() === 'avancado') {
            echo "Suporte Avançado: Tratando a requisição.\n";
        } elseif ($this->proximo !== null) {
            echo "Suporte Avançado: Passando para o próximo.\n";
            $this->proximo->tratarRequisicao($requisicao);
        } else {
            echo "Suporte Avançado: Não há próximo manipulador.\n";
        }
    }
}
