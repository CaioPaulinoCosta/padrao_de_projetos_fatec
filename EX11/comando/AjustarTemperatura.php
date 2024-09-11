<?php
require_once 'Comando.php';

class AjustarTemperatura implements Comando
{
    private $temperatura;

    public function __construct($temperatura)
    {
        $this->temperatura = $temperatura;
    }

    public function executar()
    {
        echo "Temperatura ajustada para {$this->temperatura} graus\n";
    }

    public function desfazer()
    {
        echo "Temperatura retornada ao valor anterior\n";
    }
}
