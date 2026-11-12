<?php
    require_once "./db/conexao.php";

    $suppliers = [];
    $sql = "SELECT id, name, telephone, email FROM supplier";
    $resultado = mysqli_query($db, $sql);

    if (!$resultado) {
        error_log("Erro ao buscar supplier: " . mysqli_error($db));
    } else {
        while ($p = mysqli_fetch_assoc($resultado)) {
            $suppliers[] = [
                "id" => $p["id"],
                "name" => $p["name"],
                "telephone" => $p["telephone"],
                "email" => $p["email"],
            ];
        }
    }
?>
