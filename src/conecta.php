<?php
//Src/conecta.php

//Parâmetros de conexão ao servidor MySQL
$servidor = "localhost";
$banco = "flybynight_completo";
$usuario = "root";
$senha = "senacpenha";


/* usamos o try/cath para realizar as operações de conexão ao servidor*/

try {
    //Criando um objeto a partir da classe PDO, definindo uma string de conexão
    //PDO é uma classe de recursos para manipulaçoa de bancos de dados
    //php Data Objetos
    $conexao = new PDO(
        "mysql:host=$servidor;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );
     //Garantindo que erros/exceções serão lançadas/exibidas em qualquer falhe na conexão
    $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Garantindo que resultados de operaçoes Select sejam retornados como array associativo
    $conexao ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $erro) {
    //"logar/registrar" o erro e exibir no terminal os detalhes do erro
    error_log($erro->getMessage());
//Na interface publica , exibimos uma mensagem genérica para o usuario
    exit("Não foi possivel conectar ao banco.");
}

//teste provisório
var_dump($conexao);