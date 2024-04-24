# 📜 README

Este repositório contém um exemplo simples de uso do padrão de projeto Adapter em PHP, juntamente com um exemplo de aplicação utilizando o padrão.

## Descrição do Código

### Arquivo "TaxaCambio.php"

Este arquivo contém a definição da classe `TaxaCambio`, que encapsula uma taxa de câmbio entre duas moedas. A classe possui métodos para obter a moeda de origem, a moeda de destino e o valor da taxa de câmbio.

### Arquivo "ApiCambioExterno.php"

Neste arquivo, é definida a classe `ApiCambioExterno`, que simula a comunicação com uma API externa para obter taxas de câmbio. A classe possui um método `obterTaxasCambio()` que retorna uma lista de objetos `TaxaCambio`, simulando taxas de câmbio fixas entre algumas moedas.

### Arquivo "ConversorMoedaAdapter.php"

Este arquivo contém a implementação da classe `ConversorMoedaAdapter`, que implementa o padrão Adapter. A classe utiliza a classe `ApiCambioExterno` para obter as taxas de câmbio e fornece um método `converter` para converter valores entre diferentes moedas usando as taxas de câmbio da API externa.

### Arquivo "Cliente.php"

Neste arquivo, é mostrado como utilizar o `ConversorMoedaAdapter` para converter valores entre diferentes moedas. A classe `Cliente` demonstra o uso do `ConversorMoedaAdapter` através do método `converterMoeda()`, que converte um valor de uma moeda para outra e exibe o resultado.

## Como o Padrão de Projeto Adapter foi Aplicado

O padrão de projeto Adapter foi aplicado na classe `ConversorMoedaAdapter`. As principais características da implementação são:

1. **Uso de uma Classe Existente**: A classe `ConversorMoedaAdapter` adapta a interface da classe `ApiCambioExterno` para ser compatível com o sistema de e-commerce, permitindo converter valores entre diferentes moedas de forma transparente.

2. **Método `converter`**: A classe fornece um método `converter` que aceita um valor, a moeda de origem e a moeda de destino, e retorna o valor convertido usando as taxas de câmbio obtidas da API externa.

## Como Executar

1. Certifique-se de ter um servidor web (como Apache) e PHP instalados em seu ambiente.
2. Clone este repositório em seu ambiente local.
3 - Rode o arquivo dando "Run" no terminal.

Este é um exemplo simples de utilização do padrão de projeto Adapter em PHP. Este padrão é útil quando se deseja integrar sistemas que possuem interfaces incompatíveis, permitindo que eles trabalhem juntos de forma harmoniosa.
