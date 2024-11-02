<?php
require_once '../vendor/autoload.php';

$produto = [
    [
        'nome' => 'Caderno Universitário',
        'categoria' => 'Papelaria',
        'preco' => 19.90,
        'descricao' => 'Caderno universitário com 200 folhas pautadas.'
    ],
    [
        'nome' => 'Caneta Azul',
        'categoria' => 'Papelaria',
        'preco' => 2.50,
        'descricao' => 'Caneta universitária azul de ponta fina.'
    ],
    [
        'nome' => 'Garrafa Térmica',
        'categoria' => 'Utilidades Domésticas',
        'preco' => 45.00,
        'descricao' => 'Garrafa térmica de aço inoxidável com capacidade de 1L.'
    ],
    [
        'nome' => 'Fone de Ouvido',
        'categoria' => 'Eletrônicos',
        'preco' => 79.90,
        'descricao' => 'Fone de ouvido estéreo com cancelamento de ruído.'
    ],
    [
        'nome' => 'Violão Acústico',
        'categoria' => 'Instrumentos Musicais',
        'preco' => 399.90,
        'descricao' => 'Violão acústico com cordas de nylon e case.'
    ],
    [
        'nome' => 'Piano Digital',
        'categoria' => 'Instrumentos Musicais',
        'preco' => 1500,00,
        'descricao' => 'Piano digital com 88 teclas sensíveis ao toque.'
    ],
    [
        'nome' => 'Bateria Eletrônica',
        'categoria' => 'Instrumentos Musicais',
        'preco' => 2299,90,
        'descricao' => 'Bateria eletrônica com vários timbres e conectividade USB.'
    ],
    [
        'nome' => 'Smartphone XYZ',
        'categoria' => 'Celulares',
        'preco' => 1299,90,
        'descricao' => 'Smartphone com 128GB de armazenamento e câmera de 48MP.'
    ],
    [
        'nome' => 'Smartphone ABC',
        'categoria' => 'Celulares',
        'preco' => 799.90,
        'descricao' => 'Smartphone com 64GB de armazenamento e boa duração de bateria.'
    ],
    [
        'nome' => 'Camiseta Básica',
        'categoria' => 'Roupas',
        'preco' => 39.90,
        'descricao' => 'Camiseta de algodão, disponível em várias cores.'
    ],
    [
        'nome' => 'Calça Jeans',
        'categoria' => 'Roupas',
        'preco' => 89.90,
        'descricao' => 'Calça jeans confortável e durável.'
    ],
    [
        'nome' => 'Jaqueta de Couro',
        'categoria' => 'Roupas',
        'preco' => 299.90,
        'descricao' => 'Jaqueta de couro estilosa e resistente.'
    ],
];

$mpdf = new \Mpdf\Mpdf();

    /*echo $itens['nome']."</br>";
    echo $itens['categoria']."</br>";
    echo $itens['preco']."</br>";
    echo $itens['descricao']."</br>";*/

$html = '
<style>
    body {
        font-family: Arial, sans-serif;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<h6 textaling="left">01/11/2024 - 00:35</h6>
<h2>Relatório de Produtos</h2>
<table border="2">
<tr>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Preço</th>
    <th>Descrição</th>
</tr>';

foreach ($produto as $itens) {
    $html .= '<tr>
        <td>' . $itens['nome'] . '</td>
        <td>'. $itens['categoria'] . '</td>
        <td>R$' . number_format($itens['preco'], 2, ',', '.') . '</td>
        <td>' . $itens['descricao'] . '</td>
    </tr>';
}
$html .= '</table>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>