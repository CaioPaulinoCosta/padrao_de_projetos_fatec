<?php

interface PizzaFactory {
    public function createSavoryPizza(): Pizza;
    public function createSweetPizza(): Pizza;
}


?>