<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexos Lab</title>
    <link rel="icon" href="assets/icons/icon.svg">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include './components/header.php'  ?>

    <div class="layout">
        <main class="catalog">
            <h1 class="catalog__title">Produtos</h1>
            <div class="catalog__grid">
                <aside class="product-card">
                    <img class="product-card__image" src="./static/image/Fotografia do produto.png" alt="">
                    <div class="product-card__information">
                        <h2 class="product-card__name">Caneca de cerâmica</h2>
                        <p class="product-card__description">Esmalte areia, toque artesanal.
                        Capacidade de 300 ml.</p>
                        <data class="product-card__price" value="49.9">R$ 49,90</data>
                        <button class="btn"> <?php $color='white'; $size=18; include './icons/cart.php' ?>  Adicionar ao carrinho</button>
                    </div>
                </aside>
            </div>
        </main>
        
        <?php include './components/cart.php' ?>
    </div>
</body>

</html> 