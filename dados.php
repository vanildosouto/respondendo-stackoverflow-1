<?php

// Vamos retornar um array com os dados.

$dados = [
    0 => [
        'id' => 1,
        'nome' => 'Metal Gear Solid 3',
        'qtd' => 2,
        'valor' => 80.00
    ],
    1 => [
        'id' => 2,
        'nome' => 'Metal Gear Solid Peace Walker',
        'qtd' => 4,
        'valor' => 70.00
    ],
    2 => [
        'id' => 3,
        'nome' => 'Metal Gear Solid 2',
        'qtd' => 1,
        'valor' => 40.00
    ]
];

// Vou colocar um sleep, só pra 'simular'
// a demora no carregamento do script
sleep(3);

// Retornamos o JSON com os cabeçalhos corretos
header('Content-type: application/json');
echo json_encode($dados);
