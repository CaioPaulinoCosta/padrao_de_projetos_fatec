<?php
require_once 'AbstractProduct.php';

class SavoryPizzaDefault implements Pizza {
    public function exibirInformacoes() {
        echo "<p>Pizza de Calabresa</p>";
    }
}

class SweetPizzaDefault implements Pizza {
    public function exibirInformacoes() {
        echo "<p>Pizza de Chocolate</p>";
    }
}

class SavoryPizzaGourmet implements Pizza {
    public function exibirInformacoes() {
        echo "<p>Pizza Marguerita</p>";
    }
}

class SweetPizzaGourmet implements Pizza {
    public function exibirInformacoes() {
        echo "<p>Pizza de frutas</p>";
    }
}

function exibirPizzasSalgadas(array $pizzas) {
    echo "<h2>Pizzas Salgadas:</h2>";
    foreach ($pizzas as $pizza) {
        $pizza->exibirInformacoes();
    }
}

function exibirPizzasDoces(array $pizzas) {
    echo "<h2>Pizzas Doces:</h2>";
    foreach ($pizzas as $pizza) {
        $pizza->exibirInformacoes();
    }
}
?>
