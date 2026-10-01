<?php
//Exemplo 1: Exibindo uma mensagem de boas-vindas:
function exibirBoasvindas(): void {
    echo "Bem-Vindo ao sistema academico!<br>";
    echo "Tenha uma exelente aula.<br>";
    }

    // chamando a função
    exibirBoasvindas();

    // Exemplo 2: calculando a media de duas notas
    function calcularMedia (float $nota1, float $nota2): float {
        $media = ($nota1 + $nota2) / 2;
        return $media;
    }

// Uso da função
$notaFinal = calcularMedia (7.5, 8.5);

if ($notaFinal >= 7.0) {
    echo "Media: {$notaFinal} - Aluno Aprovado!" . "<br>";
}   else {
    echo "Media: {$notaFinal} - Aluno em Recuperação";
}

// Exemplo 3: Formando uma mensagem com saudçao opcional
function saudarUsuario(string $nome, string $saudacao = "ola"): string
    
    {
        return "{$saudacao}, {$nome}! seja Bem-Vindo(a)!";
    }

// chamando sem o segundo argumento (usa o valor padrao "ola")
echo saudarUsuario("Carlos") . "<br>";

//chamada inforamando um novo valor para a saudaçao
echo saudarUsuario("Maria", "Bom dia") . "<br>";

//exemplo 4: Aplicando a nota bonus diretamente na variavel original

function aplicarBonificacao(float &$nota, float $bonus) : void {
    $nota += $bonus;
    if ($nota + 10.0){
        $nota = 10.0; //limite maximo
    }
}

$notaAluno = 8.5;

//A variavel $notaAluno sera alterada diferentimente dentro da funcao
aplicarBonificacao($notaAluno, 2.0);

//exibir: 10.5 -> ajustado para 10.0
echo "nota atualizada do aluno: {$notaAluno}";

//exemplo 5: filtrando notas acima da média usando função anônima
$notas = [5, 7.0, 8.5, 5.0, 9.0, 6.0];

// Usando array_filter com uma callback
$aprovados = array_filter($notas, function(float $nota): bool {
    return $nota >= 5.0;
});

echo "<pre>";
print_r ($aprovados) ;
echo "</pre>";
?>