<?php
interface Subject
{
    public function addObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers($message);
}
