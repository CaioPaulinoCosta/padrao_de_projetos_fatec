<?php
require_once 'PizzariaFactory.php';
require_once 'ConcrateProduct.php';


class DefaultFactory implements PizzaFactory {
    public function createSavoryPizza(): Pizza {
        return new SavoryPizzaDefault();
    }

    public function createSweetPizza(): Pizza {
        return new SweetPizzaDefault();
    }
}

class GourmetFactory implements PizzaFactory {
    public function createSavoryPizza(): Pizza {
        return new SavoryPizzaGourmet();
    }

    public function createSweetPizza(): Pizza {
        return new SweetPizzaGourmet();
    }
}



?>