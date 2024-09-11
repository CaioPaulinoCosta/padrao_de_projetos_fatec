<?php
require_once 'Comando.php';

class LigarLuz implements Comando
{
    public function executar()
    {
        echo "Luz ligada\n";
    }

    public function desfazer()
    {
        echo "Luz desligada\n";
    }
}
