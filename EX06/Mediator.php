<?php

class Mediator
{
    private $semaforos;

    public function __construct()
    {
        $this->semaforos = [];
    }

    public function adicionarSemaforo(Semaforo $semaforo)
    {
        $this->semaforos[] = $semaforo;
    }

    public function notificar(Semaforo $semaforo, $cor)
    {
        foreach ($this->semaforos as $s) {
            if ($s !== $semaforo) {
                // Implementar lógica se necessário quando um semáforo notifica o Mediator
            }
        }
    }

    public function mudarProximoEstado(Semaforo $semaforo)
    {
        switch ($semaforo->getCor()) {
            case 'verde':
                $semaforo->mudarEstado('amarelo', 5);
                break;
            case 'amarelo':
                $semaforo->mudarEstado('vermelho', 0);
                $this->sincronizarSemaforos($semaforo);
                break;
            case 'vermelho':
                $semaforo->mudarEstado('verde', 30);
                break;
        }
    }

    private function sincronizarSemaforos(Semaforo $semaforoAtual)
    {
        $todosVermelhos = true;
        foreach ($this->semaforos as $s) {
            if ($s->getCor() != 'vermelho') {
                $todosVermelhos = false;
                break;
            }
        }

        if ($todosVermelhos) {
            foreach ($this->semaforos as $s) {
                if ($s !== $semaforoAtual) {
                    $s->mudarEstado('verde', 30);
                    break;
                }
            }
        }
    }
}
