<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "./components/head.php" ?>
</head>
<body class="form-body">
    <?php $btn = true; include './components/header.php'  ?>

    <main class="form-container">
        <form action="./db/createProduct.php" method="post" class="form-content" enctype="multipart/form-data">
            <div class="from__header">
                <h1 class="form__title">Cadastro Categoria</h1>
                <p class="form__description">Dê um nome à nova categoria da loja.</p>
            </div>

            <input type="file" name="imagem" accept="image/*" required>

            <label class="form__label">
                Nome
                <input
                    class="form__text"
                    type="text" 
                    name="name"
                    placeholder="Ex: caneca"
                    maxlength="40"
                    required
                >
            </label>
            <label class="form__label">
                Descrição
                <input
                    class="form__text"
                    type="text" 
                    name="description"
                    placeholder="Ex: ceneca de ceramica..."
                    maxlength="500"
                >
            </label>

            <div class="label-row">
                <label class="form__label">
                Quantidade
                    <input
                        class="form__text"
                        type="number" 
                        name="amount"
                        placeholder="Ex: 5"
                        required
                    >
                </label>
                <label class="form__label">
                    Preço
                    <input
                        class="form__text input__preco"
                        type="number" 
                        name="preco"
                        placeholder="Ex: R$ 0,00"
                        required
                    >
                </label>
            </div>


            <div class="label-row">
                <label class="form__label">
                    Categoria
                    <select class="form__selection" name="tag_id" required>
                        <option value="" disabled selected hidden>Selecione uma opção...</option>
                        
                        <?php 
                            require './db/getAllTags.php';
                            if (!empty($tags) && is_array($tags)) {
                                foreach ($tags as $item) {
                                    include './components/option.php';
                                }
                            }
                        ?>
                    </select>
                </label>
                <label class="form__label">
                    Fornecedor
                    <select class="form__selection" name="supplier_id" required>
                        <option value="" disabled selected hidden>Selecione uma opção...</option>
                        <?php 
                            require './db/getAllSupplier.php';
                            if (!empty($suppliers) && is_array($suppliers)) {
                                foreach ($suppliers as $item) {
                                    include './components/option.php';
                                }
                            }
                        ?>
                    </select>
                </label>
            </div>

            <div class="form__actions">
                <button class="btn form__btn-submit" name="enviar" type="submit">Enviar</button>
            </div>
        </form>
        
    </main>
    
    <script src="./js/form.js"></script>
    <script src="./js/themes.js"></script>
</body>
</html>