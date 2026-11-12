<?php
    require "./db/conexao.php";
    $produtos = [];
    $sql = "SELECT * FROM product";


    $resultado = mysqli_query($db, $sql);
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        while ($p = mysqli_fetch_assoc($resultado)) {
           $produto = [
                "id" => $p["id"],
                "title" => $p["name"],
                "imgUrl" => $p["img_url"],
                "description" => $p["description"],
                "amount" => $p["amount"],
                "preco" => $p["preco"],
                "supplierId" => $p["supplier_id"],
                "tagId" => $p["tag_id"]
            ];

            array_push($produtos, $produto);
        }
    } else {
       mysqli_error($db);
    }

    mysqli_close($db);
?>