<?php

require_once 'SuporteHandler.php';
require_once 'Requisicao.php';

class SuporteEspecializado implements SuporteHandler
{
    private ?SuporteHandler $proximo = null;

    public function setProximo(SuporteHandler $proximo): void
    {
        $this->proximo = $proximo;
    }

    public function tratarRequisicao(Requisicao $requisicao): void
    {
        if ($requisicao->getTipo() === 'especializado') {
            echo "Suporte Especializado: Tratando a requisição.\n";
        } elseif ($this->proximo !== null) {
            echo "Suporte Especializado: Passando para o próximo.\n";
            $this->proximo->tratarRequisicao($requisicao);
        } else {
            echo "Suporte Especializado: Não há próximo manipulador.\n";
        }
    }
}
