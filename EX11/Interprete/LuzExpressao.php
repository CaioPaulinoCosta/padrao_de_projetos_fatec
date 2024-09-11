<?php
require_once 'Expressao.php';

class LuzExpressao implements Expressao
{
    public function interpretar($contexto)
    {
        if (strpos($contexto, "luz") !== false) {
            if (strpos($contexto, "ligar") !== false) {
                echo "Interprete: Ligando a luz\n";
                return new LigarLuz();
            } elseif (strpos($contexto, "desligar") !== false) {
                echo "Interprete: Desligando a luz\n";
                return new DesligarLuz();
            }
        }
        return null;
    }
}
