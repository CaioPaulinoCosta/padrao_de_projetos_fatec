<?php

require_once 'ConversorMoedaAdapter.php';

class Cliente
{
    public function converterMoeda()
    {
        $conversor = new ConversorMoedaAdapter();

        try {
            $valorConvertido = $conversor->converter(100, "USD", "EUR");
            echo "Valor convertido: " . $valorConvertido . " EUR";
        } catch (Exception $e) {
            echo "Erro ao converter moeda: " . $e->getMessage();
        }
    }
}

$cliente = new Cliente();
$cliente->converterMoeda();
