<?php
class TaxaCambio
{
    private $moedaOrigem;
    private $moedaDestino;
    private $taxa;

    public function __construct($moedaOrigem, $moedaDestino, $taxa)
    {
        $this->moedaOrigem = $moedaOrigem;
        $this->moedaDestino = $moedaDestino;
        $this->taxa = $taxa;
    }

    public function getMoedaOrigem()
    {
        return $this->moedaOrigem;
    }

    public function getMoedaDestino()
    {
        return $this->moedaDestino;
    }

    public function getTaxa()
    {
        return $this->taxa;
    }
}
