<?php
//src/fornecedor_crud.php

//todas as funções criadas neste arquivo precisarão do script de conexão
require_once "conecta.php";


//usada em fornecedores/listar.php
function buscarFornecedores(PDO $conexao):array{

//montando o comando SQL para a consulta
$sql = "SELECT * FROM fornecedores ORDER BY nome";

//Executando o comando e guardando o resultado da consulta
$consulta = $conexao->query($sql);

//Retomando o resultado como um array associativo
return $consulta ->fetchAll();

}