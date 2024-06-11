<?php

class Semaforo
{
    private $cor;
    private $tempo;
    private $nome;
    private $mediator;

    public function __construct($nome, $mediator)
    {
        $this->nome = $nome;
        $this->mediator = $mediator;
        $this->cor = 'vermelho';
        $this->tempo = 0;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getTempo()
    {
        return $this->tempo;
    }

    public function mudarEstado($cor, $tempo)
    {
        $this->cor = $cor;
        $this->tempo = $tempo;
        echo "Semáforo {$this->nome} está {$this->cor} por {$this->tempo} segundos.\n";
        $this->mediator->notificar($this, $cor);
    }

    public function tick()
    {
        if ($this->tempo > 0) {
            $this->tempo--;
        } else {
            // Notifica o Mediator para mudar para o próximo estado
            $this->mediator->mudarProximoEstado($this);
        }
    }
}
