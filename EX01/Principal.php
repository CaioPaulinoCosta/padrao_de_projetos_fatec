<?php
require_once 'ConcreteFactory.php';
require_once 'PizzariaFactory.php';
function clienteCode(PizzaFactory $factory) {
    $savoryPizza = $factory->createSavoryPizza();
    $sweetPizza = $factory->createSweetPizza();
    
    $savoryPizza->exibirInformacoes();
    $sweetPizza->exibirInformacoes();
}

$pizzasSalgadas = [
    new SavoryPizzaDefault(),
    new SavoryPizzaGourmet()
];

$pizzasDoces = [
    new SweetPizzaDefault(),
    new SweetPizzaGourmet()
];

exibirPizzasSalgadas($pizzasSalgadas);
exibirPizzasDoces($pizzasDoces);


?>
