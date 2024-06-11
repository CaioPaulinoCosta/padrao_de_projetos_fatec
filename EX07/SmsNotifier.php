<?php
require_once 'Observer.php';

class SMSNotifier implements Observer
{
    public function update($message)
    {
        echo "SMS enviado: " . $message . "\n";
    }
}
