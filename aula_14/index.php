<?php
namespace aula_14;

require_once "produto.php";
require_once "produtoDAO.php";

$dao = new ProdutoDAO();

$dao-> CriarProduto(new Produto(1, "Tomate", 4.99));
$dao-> CriarProduto(new Produto(2, "Maça", 12.90));
$dao-> CriarProduto(new Produto(3, "Queijo Brie", 20));
$dao-> CriarProduto(new Produto(4, "Iorgute Grego", 16.90));
$dao-> CriarProduto(new Produto(5, "Guaraná Jesus", 9.99));
$dao-> CriarProduto(new Produto(6, "Bolacha Bono", 3.5));
$dao-> CriarProduto(new Produto(7, "Desinfetante Urca", 15));
$dao-> CriarProduto(new Produto(8, "Prestobarba Bic", 7.5));

echo "\n Listagem Inicial: \n";
foreach ($dao->lerProduto() as $produto) {
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getValor()} \n";
}


$dao-> atualizarProduto(3, "Queijo Brie", 19.90);
$dao-> atualizarProduto(5, "Guaraná Jesus", 11.90);
$dao-> atualizarProduto(7, "Desinfetante Barbarex", 15);

echo "\n Após Atualização \n";
foreach ($dao->lerProduto() as $produto) {
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getValor()} \n";
}


$dao-> excluirProduto(1);
$dao-> excluirProduto(2);

echo "\n Após Exclusão \n";
foreach ($dao->lerProduto() as $produto) {
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getValor()} \n";
}