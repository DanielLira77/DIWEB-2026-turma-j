<?php

$estoque_informatica =

[
    ["id" => 101, "nome" => "Processador Ryzen 7", "qtd" => 15,
     "preço" => 1850,00, "tipo" => "Hardware"],
    ["id" => 102, "nome" => "Placa mãe B550M", "qtd" => 8,
    "preço" => 950,00, "tipo" => "Hardware"],
    ["id" => 103, "nome" => "Memória RAM 16GB DDR4", "qtd" => 25, 
    "preço" => 320,00, "tipo" => "Hardware"],
    ["id" => 104, "nome" => "RTX 4060 Ti", "qtd" => 5, 
    "preço" => 2600,00, "tipo" => "Hardware"],
    ["id" => 105, "nome" => "SSD NVMe 1 TB", "qtd" => 30, 
    "preço" => 450,00, "tipo" => "Armazenamento"],
    ["id" => 106, "nome" => "Fonte 750W 80 Plus", "qtd" => 12, 
    "preço" => 580,00, "tipo" => "Energia"],
    ["id" => 107, "nome" => "Gabinete Torre Média", "qtd" => 10, 
    "preço" => 350,00, "tipo" => "Gabinete"],
    ["id" => 108, "nome" => "Bebedouro de água 240mm", "qtd" => 7, 
    "preço" => 420,00, "tipo" => "Refrigeração"],
    ["id" => 109, "nome" => "Monitor 27' 144Hz", "qtd" => 4, 
    "preço" => 1250,00, "tipo" => "Periférico"],
    ["id" => 110, "nome" => "Teclado Mecânico RGB", "qtd" => 20, 
    "preço" => 288,00, "tipo" => "Periférico"],
];
    echo "<h2>Relátorio de Estoque de Peças</h2>";
    // Iníco da tabela para organizar os dados visualmente;
    echo "<table border = '1' cellpadding = '10' 
    style = 'boorder-collaspse: collaspse:
    largura: 100%;'>"; echo "<tr style = 'background-color:
    #4cbb57;'>
        <th>ID</tr>
        <th>Produto</tr>
        <th>Tipo</tr>
        <th>Qtd</tr>
        <th>Preço Unitário.</tr>
        <th>Total em Estoque</tr>
    </tr>"; 
  // O foreach percorre cada 'sub-array' (cada produto)
  foreach ($estoque_informatica as $indice) {
    $valor_total_item = $indice['qtd'] * $indice('preço');
    echo "<tr>";
    echo "<td>" . $indice['id'] . "</td>";
    echo "<td>" . $indice['nome']. "</td>";
    echo "<td>" . $indice['tipo']. "</td>";
    echo "<td>" . $indice['qtd']. "</td>";
    echo "<td>R$ " . number_format[$indice('preço'), 2,',', '.] . "</td>";
    echo "<td>R$ " . number_format[$valor_total_item, 2,',', '.] . "</td>";
    echo "</tr>";

  echo "</table>";

  }
?>