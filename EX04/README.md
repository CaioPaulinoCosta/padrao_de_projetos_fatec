# 📜 README

Este repositório contém um exemplo simples de uso do padrão de projeto Facade em PHP para um sistema de controle de estoque.

## Descrição do Código

### Arquivo "Product.php"

Este arquivo define a classe `Product`, que representa um produto com atributos como ID, nome e quantidade. A classe possui métodos para acessar e modificar esses atributos.

### Arquivo "Stock.php"

Neste arquivo, a classe `Stock` é definida para gerenciar um conjunto de produtos. A classe permite adicionar produtos, consultar e atualizar informações sobre eles, além de gerar relatórios de estoque.

### Arquivo "StockFacade.php"

Este arquivo implementa a classe `StockFacade`, que serve como uma interface simplificada para o sistema de controle de estoque. A classe oculta a complexidade das operações de estoque, fornecendo métodos como adicionar produtos, consultar produtos, atualizar quantidades e gerar relatórios de estoque.

### Arquivo "main.php"

Neste arquivo, são mostrados exemplos de como utilizar a classe `StockFacade` para realizar operações no sistema de controle de estoque, como adicionar produtos, atualizar quantidades, consultar produtos e gerar relatórios.

## Como o Padrão de Projeto Facade foi Aplicado

O padrão de projeto Facade foi aplicado na classe `StockFacade`. As características principais da implementação são:

1. **Interface Simplificada**: A classe `StockFacade` fornece uma interface simplificada para interagir com o sistema de controle de estoque. Isso oculta a complexidade das operações de estoque, tornando o sistema mais fácil de usar para diferentes tipos de usuários.

2. **Centralização das Operações**: A classe `StockFacade` centraliza as operações relacionadas ao estoque, encapsulando a lógica interna do sistema. Isso promove a modularidade e facilita a manutenção do código.

## Como Executar

1. Certifique-se de ter um servidor web (como Apache) e PHP instalados em seu ambiente.
2. Clone este repositório em seu ambiente local.
3. Execute o arquivo `main.php` para testar as funcionalidades do sistema de controle de estoque.

Este é um exemplo simples de utilização do padrão de projeto Facade em PHP para simplificar a interação com um sistema complexo de controle de estoque. O Facade é útil para encapsular a complexidade interna de um sistema e oferecer uma interface unificada e fácil de usar para os usuários.
