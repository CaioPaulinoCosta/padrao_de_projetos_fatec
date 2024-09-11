<?php
require_once 'comando/Comando.php';

class ControleRemoto
{
    private $comando;

    public function definirComando(Comando $comando)
    {
        $this->comando = $comando;
    }

    public function executarComando()
    {
        $this->comando->executar();
    }

    public function desfazerComando()
    {
        $this->comando->desfazer();
    }
}
