<article id="modal">
    <div class="modal-container">
        <div class="modal__header">
            <h1 class="modal__title">O que você quer cadastrar?</h1>
            <button id="modal-close">X</button>
        </div>
        <p class="modal__description">Escolha uma opção para continuar.</p>

        <div class="modal__register">
            <a href="./products.php">
                <div class="modal__register-item">
                    <div class="modal__register-icon"><?php include './icons/box.php' ?></div>
                    <div class="modal__register-text">
                        <h2 class="modal__register-title">Cadastrar produto</h2>
                        <p class="modal__register-description">Adicione um novo item ao catálogo.</p>
                    </div>
                </div>
            </a>

            <a href="./supplier.php">
                <div class="modal__register-item">
                    <div class="modal__register-icon"><?php include './icons/truck.php' ?></div>
                    <div class="modal__register-text">
                        <h2 class="modal__register-title">Fornecedores</h2>
                        <p class="modal__register-description">Cadastre quem fornece seus produtos.</p>
                    </div>
                </div>
            </a>
            
            <a href="./tag.php">
                <div class="modal__register-item">
                    <div class="modal__register-icon"><?php include './icons/tag.php' ?></div>
                    <div class="modal__register-text">
                        <h2 class="modal__register-title">Categorias</h2>
                        <p class="modal__register-description">Organize os produtos da sua loja.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</article>

<script src="js/modal.js"></script>