<?php
//fornecedores/editar.php
require_once "../src/fornecedor_crud.php";

//Acessar a URL e "pegar" o vLOR DO PARÂMETRO (id) existente nela
//Atenção ao nome do parâmetro que você criou no link dinâmico.
//Deve ser o mesmo ao passar para o $ Get
$id =$_GET['id'];

//echo $id;

// 1) chamamos a função e passamos id para ela
//2) Ao término , a função devolve (retorna) um array com os dados do fornecedor
$fornecedor = buscarFornecedorPorId($conexao, $id);

var_dump($fornecedor)
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar fornecedor - Fly By Night</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
    <?php
    $caminhoBase = '../';
    $secaoAtual = 'fornecedores';
    require '../componentes/cabecalho.php';
    ?>
    <main>
        <h2>Editar fornecedor</h2>
        <!-- Modelo visual: os campos não são enviados nem persistidos. -->
        <!-- Os campos serão preenchidos com os dados do registro selecionado. -->
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $fornecedor['id'] ?>">
            <div>
                <label for="nome">Nome:</label>
                <input value="<?= $fornecedor['nome']?> "type="text" name="nome" id="nome" maxlength="100" required>
            </div>
            <button type="submit">Atualizar</button>
        </form>
        <a href="listar.php">← Voltar</a>
    </main>
</body>

</html>