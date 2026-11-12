<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "./components/head.php" ?>
</head>
<body class="form-body">
    <?php include './components/header.php'  ?>

    <main class="catalog">
        <h1 class="catalog__title">Produtos</h1>
        <div class="catalog__grid">
            <?php 
            include "./db/getAllProducts.php";
            
            foreach ($produtos as $produto) {
                include './components/productCard.php';
            }
            
            
            ?>
        </div>
    </main>

    <?php include './components/modal.php' ?>
    <script src="./js/themes.js"></script>
</body>

</html> 