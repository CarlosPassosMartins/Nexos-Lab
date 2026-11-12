<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "./components/head.php" ?>
</head>
<body class="form-body">
    <?php $btn = true; include './components/header.php'  ?>

    <main class="form-container">
        <form action="./db/createTag.php" method="post" class="form-content">
            <div class="from__header">
                <h1 class="form__title">Cadastro Categoria</h1>
                <p class="form__description">Dê um nome à nova categoria da loja.</p>
            </div>
            <label class="form__label">
                Nome
                <input
                    class="form__text"
                    type="text" 
                    name="name"
                    placeholder="Ex: casa"
                    maxlength="25"
                    required
                >
            </label>
            <div class="form__actions">
                <button class="btn form__btn-submit" type="submit">Enviar</button>
            </div>
        </form>
    </main>

    <script src="./js/themes.js"></script>
</body>
</html>