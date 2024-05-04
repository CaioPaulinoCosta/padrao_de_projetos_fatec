<?php

require_once 'StockFacade.php';

// Criando uma instância da Facade
$stockFacade = new StockFacade();

// Adicionando produtos
$stockFacade->addNewProduct(1, 'Camiseta', 50);
$stockFacade->addNewProduct(2, 'Calça Jeans', 30);

// Atualizando a quantidade de um produto
$stockFacade->updateProductQuantity(1, 40);

// Consultando um produto
$product = $stockFacade->getProduct(1);
if ($product) {
    echo "Produto encontrado: {$product->getName()} ({$product->getQuantity()} unidades)\n";
} else {
    echo "Produto não encontrado.\n";
}

// Gerando relatório de estoque
$stockReport = $stockFacade->generateStockReport();
echo "\nRelatório de Estoque:\n";
foreach ($stockReport as $item) {
    echo "{$item['name']} (ID: {$item['id']}) - Quantidade: {$item['quantity']}\n";
}

