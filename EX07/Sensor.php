<?php
require_once 'Subject.php';

class Sensor implements Subject
{
    private $observers = array();
    private $state;

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $this->observers = array_filter($this->observers, function ($obs) use ($observer) {
            return $obs !== $observer;
        });
    }

    public function notifyObservers($message)
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    public function intrude()
    {
        $this->state = "Intrusão detectada!";
        $this->notifyObservers($this->state);
    }
}
