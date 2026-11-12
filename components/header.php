<header class="header">
    <div class="header__logo">
        <button id="btn-theme" class="btn">trocar tema</button>
        <div class="header__logo-img">
            <?php include './icons/logo.php' ?>
        </div>
        <span class="header__logo-title">Nexos Lab</span>
    </div>

   <?php 
    if (isset($btn)){
        echo'<a href="./" id="open-modal" class="btn header__btn-voltar">
            Voltar
        </a>';
    }else{
        echo'<button id="open-modal" class="btn header__btn">
            <span class="header__btn-plus">+</span>cadastrar
        </button>';
    }
   ?>
</header>