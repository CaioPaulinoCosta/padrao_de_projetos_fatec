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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

<?php if ($produtoData !== false): ?>
    <ul>
        <?php foreach ($produtoData as $key => $value): ?>
            <li><?php echo $key . ': ' . $value; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Nenhum produto encontrado.</p>
<?php endif; ?>

</body>
</html>
