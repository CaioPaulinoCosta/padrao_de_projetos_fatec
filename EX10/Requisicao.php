<?php

class Requisicao
{
    private string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}
