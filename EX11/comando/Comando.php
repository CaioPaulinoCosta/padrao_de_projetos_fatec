<?php
interface Comando
{
    public function executar();
    public function desfazer();
}
