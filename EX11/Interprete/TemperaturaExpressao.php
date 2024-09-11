<?php
require_once 'Expressao.php';

class TemperaturaExpressao implements Expressao
{
    public function interpretar($contexto)
    {
        if (strpos($contexto, "temperatura") !== false) {
            preg_match('/\d+/', $contexto, $matches);
            if (!empty($matches)) {
                $temperatura = $matches[0];
                echo "Interprete: Ajustando a temperatura para $temperatura graus\n";
                return new AjustarTemperatura($temperatura);
            }
        }
        return null;
    }
}
