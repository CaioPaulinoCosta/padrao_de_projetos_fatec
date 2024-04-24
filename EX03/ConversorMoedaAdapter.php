<?php

require_once 'TaxaCambio.php';
require_once 'ApiCambioExterno.php';

class ConversorMoedaAdapter
{
    private $apiCambioExterno;

    public function __construct()
    {
        $this->apiCambioExterno = new ApiCambioExterno();
    }

    public function converter($valor, $moedaOrigem, $moedaDestino)
    {
        $taxas = $this->apiCambioExterno->obterTaxasCambio();
        $taxaEncontrada = null;

        foreach ($taxas as $taxa) {
            if ($taxa->getMoedaOrigem() === $moedaOrigem && $taxa->getMoedaDestino() === $moedaDestino) {
                $taxaEncontrada = $taxa;
                break;
            }
        }

        if ($taxaEncontrada === null) {
            throw new Exception("Taxa de câmbio não encontrada para a conversão especificada");
        }

        return $valor * $taxaEncontrada->getTaxa();
    }
}
