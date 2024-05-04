<?php

require_once 'Product.php';
require_once 'Stock.php';

class StockFacade
{
    private $stock;

    public function __construct()
    {
        $this->stock = new Stock();
    }

    public function addNewProduct($id, $name, $quantity)
    {
        $product = new Product($id, $name, $quantity);
        $this->stock->addProduct($product);
    }

    public function getProduct($productId)
    {
        return $this->stock->getProduct($productId);
    }

    public function updateProductQuantity($productId, $newQuantity)
    {
        $this->stock->updateProductQuantity($productId, $newQuantity);
    }

    public function generateStockReport()
    {
        return $this->stock->generateStockReport();
    }
}

