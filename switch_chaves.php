<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body {font-family: sans-serif; display: flex;
            justify-content: center; margin-top: 50px}
        .calc {border: 1px solid #270cf0;padding: 20px;
            border-radius: 10px;box-shadow: 2px 2px 10px #7e7ee3;}
        input, select, button {margin: 5px 0; padding: 10px;
            width: 100%; box-sizing: border-box;}   
        .resultado {background: #f4f4f4;padding: 10px;
            margin-top: 10px;font-weight: bold; text-align: center;}
    </style>
</head>
<body>
<div class="calc">
    <h2>Calculadora Simples</h2>
    <form method="post">
        <input type="number" name="n1" step="any"
        placeholder="Primeiro número" obrigátorio>
        <select name="operacao">
            <option value="somar">Soma (+)</option>
            <option value="subtrair">Subtraçâo (-)</option>
            <option value="multiplicar">Multipiicação (*)</option>
            <option value="dividir">Divisão (/)</option>
        </select>
        <input type="number" name="n2" step="any"placeholder = "Segundo n">
        <button type="submit" name="calcular">Calculadora</button>
    </form>
    </body>
        </html>
    <?php
    if (isset($_POST['calcular'])) {
        $n1 = (float)$_POST['n1'];
        $n2 = (float)$_POST['n2'];
        $op = $_POST['operacao'];
        $res = "";
        switch ($op) {
            case 'somar':
                //echo "Você está na Bahia";
                $res = $n1 + $n2;
                break;
            case 'subtrair';
                $res = $n1 - $n2;
                break;
            case 'multiplicar';
                $res = $n1 * $n2;
                break;
            case 'dividir';
                if ($n2 == 0) {
                    $res = "Erro: Divisão por zero!";
                } else {
                    $res= $n1 / $n2;
                }
                break;
        }
        echo "<div class='resultado'>Resultado: $res</div>";
    }

    return 0;
    ?>