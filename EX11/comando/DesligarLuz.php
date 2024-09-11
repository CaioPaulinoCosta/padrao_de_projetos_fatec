<?php
require_once 'Comando.php';

class DesligarLuz implements Comando
{
    public function executar()
    {
        echo "Luz desligada\n";
    }

    public function desfazer()
    {
        echo "Luz ligada\n";
    }
}
