<?php

interface SuporteHandler
{
    public function setProximo(SuporteHandler $proximo): void;
    public function tratarRequisicao(Requisicao $requisicao): void;
}
