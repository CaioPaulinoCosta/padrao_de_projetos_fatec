<?php
include_once("db.php");

class ProdutoManager {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getProdutoById($produtoId) {
        $query = $this->db->prepare("SELECT * FROM produtos WHERE id = :id");
        $query->bindParam(":id", $produtoId);
        $query->execute();
        
        $produtoData = $query->fetch(PDO::FETCH_ASSOC);
        if (!$produtoData) {
            return false; 
        }
        
        return $produtoData;
    }
}

$produtoManager = new ProdutoManager();
$produtoData = $produtoManager->getProdutoById(1);

if ($produtoData !== false) {
    $produtoId = $produtoData['id'];
    $produtoNome = $produtoData['produtoNome'];
    $produtoDescricao = $produtoData['produtoDescricao'];
    $produtoPreco = $produtoData['produtoPreco'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $produtoId ?></td>
      <td><?= $produtoNome ?></td>
      <td><?= $produtoDescricao ?></td>
      <td><?= $produtoPreco ?></td>
    </tr>
  </tbody>
</table>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
