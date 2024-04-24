<?php

class ApiCambioExterno
{
    public function obterTaxasCambio()
    {
        // Aqui simularíamos a obtenção das taxas de câmbio da API externa
        $taxas = array(
            new TaxaCambio("USD", "EUR", 0.85),
            new TaxaCambio("EUR", "USD", 1.18),
            new TaxaCambio("USD", "GBP", 0.72),
            new TaxaCambio("GBP", "USD", 1.39)
        );

        return $taxas;
    }
}
