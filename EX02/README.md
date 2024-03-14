# 📜 README

Este repositório contém um exemplo simples de uso do padrão de projeto Singleton em PHP, juntamente com um exemplo de aplicação utilizando o padrão.

## Descrição do Código

### Arquivo "db.php"

Este arquivo contém a definição da classe `Database`, que é responsável por gerenciar a conexão com o banco de dados. A classe utiliza o padrão Singleton para garantir que apenas uma instância da conexão seja criada durante a vida útil da aplicação.

A classe possui os seguintes métodos:

- `__construct()`: O construtor privado da classe estabelece a conexão com o banco de dados utilizando a extensão PDO do PHP.
- `getInstance()`: Este é um método estático que retorna a única instância da classe `Database`. Se ainda não houver uma instância, uma nova é criada.
- `getConnection()`: Retorna a conexão PDO estabelecida com o banco de dados.

### Arquivo "produto.php"

Neste arquivo, é mostrado como utilizar a classe `Database` e o padrão Singleton para obter uma conexão com o banco de dados e realizar consultas.

O arquivo começa incluindo o arquivo "db.php", que define a classe `Database`. Em seguida, define a classe `ProdutoManager`, que é responsável por realizar operações relacionadas aos produtos no banco de dados.

O método `getProdutoById($produtoId)` desta classe demonstra como utilizar a conexão com o banco de dados obtida através do padrão Singleton para realizar consultas e retornar os dados de um produto específico.

Após a definição da classe `ProdutoManager`, o código cria uma instância desta classe e utiliza o método `getProdutoById()` para obter informações de um produto com ID específico. Estes dados são então utilizados para preencher uma tabela HTML na parte inferior do arquivo.

## Como o Padrão de Projeto Singleton foi Aplicado

O padrão de projeto Singleton foi aplicado na classe `Database`. As principais características da implementação são:

1. **Construtor Privado**: O construtor da classe `Database` é privado, o que impede a instanciação direta da classe por outras partes do código.

2. **Método Estático de Instância Única**: A classe possui um método estático `getInstance()` que retorna a única instância da classe. Este método verifica se a instância já existe e, se não existir, cria uma nova instância.

3. **Variável Estática de Instância**: A classe possui uma variável estática privada `$instance` que armazena a única instância da classe.

Esta abordagem garante que apenas uma instância da classe `Database` seja criada durante a vida útil da aplicação, garantindo assim uma única conexão com o banco de dados em toda a aplicação.

## Como Executar

1. Certifique-se de ter um servidor web (como Apache) e PHP instalados em seu ambiente.
2. Clone este repositório em seu ambiente local.
3. Navegue até a pasta onde o repositório foi clonado usando o terminal.
4. Inicie o servidor web (por exemplo, `php -S localhost:8000`).
5. Abra um navegador da web e acesse `http://localhost/padraodeprojetos/EX02/produto.php` para visualizar a tabela de produtos.

Este é um exemplo simples de utilização do padrão de projeto Singleton em PHP. Este padrão é comumente utilizado para controlar o acesso concorrente a recursos compartilhados, como conexões de banco de dados, de forma eficiente e segura.

## Exibição do código em funcionamento
<h3>Database</h3>
<img src="https://media.discordapp.net/attachments/1209500402865803355/1217687497501315203/database.png?ex=6604eeda&is=65f279da&hm=e38372178e97460ec39536759bdb0b494c3e3dbfd38e551eee53b9f9098f9cfb&=&format=webp&quality=lossless&width=1184&height=676">
<h3>Página WEB</h3>
<img src="https://media.discordapp.net/attachments/1209500402865803355/1217687206425268304/paginaweb.png?ex=6604ee95&is=65f27995&hm=902be8e5deeb4176d39f843017cbf159ed268790c5e557b87165be2a3418df74&=&format=webp&quality=lossless&width=1303&height=676">
