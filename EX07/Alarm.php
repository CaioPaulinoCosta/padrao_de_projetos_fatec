<?php
require_once 'Observer.php';

class Alarm implements Observer
{
    public function update($message)
    {
        echo "Alarme disparado: " . $message . "\n";
    }
}
