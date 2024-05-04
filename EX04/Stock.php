<?php

class Stock
{
    private $products = [];

    public function addProduct(Product $product)
    {
        $this->products[$product->getId()] = $product;
    }

    public function getProduct($productId)
    {
        return $this->products[$productId] ?? null;
    }

    public function updateProductQuantity($productId, $newQuantity)
    {
        if (isset($this->products[$productId])) {
            $this->products[$productId]->setQuantity($newQuantity);
        }
    }

    public function generateStockReport()
    {
        $report = [];
        foreach ($this->products as $product) {
            $report[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'quantity' => $product->getQuantity()
            ];
        }
        return $report;
    }
}

