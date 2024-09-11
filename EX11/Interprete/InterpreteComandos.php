<?php
require_once 'LuzExpressao.php';
require_once 'TemperaturaExpressao.php';

class InterpreteComandos
{
    private $expressoes = [];

    public function __construct()
    {
        $this->expressoes[] = new LuzExpressao();
        $this->expressoes[] = new TemperaturaExpressao();
    }

    public function interpretar($comando)
    {
        foreach ($this->expressoes as $expressao) {
            $resultado = $expressao->interpretar($comando);
            if ($resultado !== null) {
                return $resultado;
            }
        }
        echo "Comando não reconhecido\n";
        return null;
    }
}
