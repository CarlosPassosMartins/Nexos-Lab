<?php
require "./conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_FILES['imagem']['name'])) {
        echo "<pre>";
        echo "ERRO: O PHP não recebeu o arquivo 'imagem'.\n";
        echo "Verifique se você salvou o HTML com enctype='multipart/form-data' e se selecionou uma foto.\n\n";
        echo "Dados recebidos em \$_FILES:\n";
        print_r($_FILES);
        echo "</pre>";
        exit;
    }

    if ($_FILES['imagem']['error'] !== UPLOAD_ERR_OK) {
        die("Erro no upload do PHP. Código: " . $_FILES['imagem']['error']);
    }

    $arquivo = $_FILES['imagem'];
    $pastaDestino = "../uploads/";
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'webp', 'avif'];

    if (!in_array($extensao, $extensoesPermitidas)) {
        die("Formato inválido. Apenas JPG, PNG, AVIF e WEBP são permitidos.");
    }

    if (!is_dir($pastaDestino)) {
        mkdir($pastaDestino, 0755, true);
    }

    $novoNome = uniqid("img_") . "." . $extensao;
    $caminhoCompleto = $pastaDestino . $novoNome;

    if (!move_uploaded_file($arquivo['tmp_name'], $caminhoCompleto)) {
        die("Falha ao mover o arquivo para a pasta ../uploads/.");
    }

    $name = $_POST['name'];
    $description = $_POST['description'];
    $amount = (int) $_POST['amount'];
    $preco = $_POST['preco'];
    $supplierId = (int) $_POST['supplier_id'];
    $tagId = (int) $_POST['tag_id'];

    $sql = "INSERT INTO product (name, img_url, description, amount, preco, supplier_id, tag_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sssisii", $name, $novoNome, $description, $amount, $preco, $supplierId, $tagId);
    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../");
        exit;
    } else {
        die("Erro ao inserir no banco: " . mysqli_error($db));
    }
}
?>
