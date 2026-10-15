<?php
require_once "conecta.php";

function buscarLojasProdutos(PDO $conexao): array
{
   $sql = "SELECT
               lojas_produtos.loja_id,
               lojas_produtos.produto_id,
               lojas_produtos.estoque,
               lojas.nome AS lojas,
               produtos.nome AS produto
        FROM lojas_produtos
        INNER JOIN lojas
        ON lojas_produtos.loja_id = lojas.id
        INNER JOIN produtos
        ON lojas_produtos.produto_id = produtos.id";
    $consulta = $conexao->query($sql);
 
    return $consulta->fetchAll();
}


function inserirLojaProduto($conexao, $loja, $produto) {
    $sql = "INSERT INTO lojas_produtos (loja_id, produto_id)
            VALUES ('$loja', '$produto')";

    return mysqli_query($conexao, $sql);
}

function buscarLojaProdutoPorIds($conexao, $loja_id, $produto_id) {
    $sql = "SELECT * FROM lojas_produtos
            WHERE loja_id = '$loja_id'
            AND produto_id = '$produto_id'";

    $resultado = mysqli_query($conexao, $sql);

    return mysqli_fetch_assoc($resultado);
}

function atualizarLojaProduto($conexao, $loja_id, $produto_id, $nova_loja, $novo_produto) {
    $sql = "UPDATE lojas_produtos
            SET loja_id = '$nova_loja',
                produto_id = '$novo_produto'
            WHERE loja_id = '$loja_id'
            AND produto_id = '$produto_id'";

    return mysqli_query($conexao, $sql);
}

function excluirLojaProduto($conexao, $loja_id, $produto_id) {
    $sql = "DELETE FROM lojas_produtos
            WHERE loja_id = '$loja_id'
            AND produto_id = '$produto_id'";

    return mysqli_query($conexao, $sql);
}
