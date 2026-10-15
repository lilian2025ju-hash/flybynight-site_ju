<?php
// produtos/excluir.php
require_once "../src/loja_produto_crud.php";
loja_produto_crud.php;

excluirProduto($conexao, $id);
header("location:listar.php");
exit;