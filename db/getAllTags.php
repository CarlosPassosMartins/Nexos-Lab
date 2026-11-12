<?php
    require_once "./db/conexao.php";

    $tags = [];
    $sql = "SELECT id, name FROM tag";
    $resultado = mysqli_query($db, $sql);

    if (!$resultado) {
        // Registra o erro no log do PHP sem quebrar o layout do usuário
        error_log("Erro ao buscar tags: " . mysqli_error($db));
    } else {
        while ($p = mysqli_fetch_assoc($resultado)) {
            $tags[] = [
                "id" => $p["id"],
                "name" => $p["name"],
            ];
        }
    }
?>
