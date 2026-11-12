<article class="product-card">
    <img class="product-card__image" src="./uploads/<?php echo $produto["imgUrl"]?>" alt="">
    <div class="product-card__information">
        <h2 class="product-card__name"><?php echo $produto["title"] ?></h2>
        <p class="product-card__description"> <?php echo $produto["description"] ?> </p>
    </div>
    <div class="product-card__btn-container">
        <data class="product-card__price" value="<?php echo $produto["preco"]?>">R$ <?php echo str_replace('.', ',', $produto["preco"]) ?></data>
        <button class="btn" data-idProduct="<?php echo $produto["id"]?>"> <?php $color='white'; $size=18; include './icons/cart.php' ?>  Adicionar ao carrinho</button>
    </div>
</article>