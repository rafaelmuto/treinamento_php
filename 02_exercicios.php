<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
    <style>
        * {
        font-family: monospace;
        background-color: #111;
        color: #fff;
        font-size: 24px;
        }
    </style>
</head>
<body>
<?php
echo '<pre>';


/**
 * WHILE DO WHILE FOR
 * 
 * EX01) usando WHILE imprimir na tela todos os numeros de 1 a 100.
 * 
 * EX02) usando FOR imprimir na tela todos os numeros de 1 a 100.
 * 
 * EX03) usando FOR imprimir na tela:
 *          a) todos os numeros pares entre 0 e 100.
 *          b) todos os numeros divisiveis por 3 entre 0 e 100;
 *          c) todos os numeros que são divisiveis por 2 e 3 ao mesmo tempo entre 0 e 100.
 * 
 * EX04) imprimir na tela a tabuada do 0 ao 100.
 */

echo "WHILE DO WHILE FOR";
echo "\n";
echo "\n";

 echo "EX_01) ";
 $a = 1;
 while ($a <= 100) {
    echo "$a, ";
    $a++;
 }
echo "\n";
echo "\n";


// Primeiro ele usa echo, depois ele adiciona +1, mesma funcionalidade que o While
echo "EX_02) ";
for($i = 1; $i <= 100; $i++){
    echo "$i, ";
}
echo "\n";
echo "\n";


echo "EX_03_a) ";
for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        echo "$i, ";
    }
}
echo "\n";
echo "\n";


echo "EX_03_b) ";
for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0){
        echo "$i, ";
    }
}
echo "\n";
echo "\n";


echo "EX_03_c) ";
for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0 && $i % 3 == 0){
        echo "$i, ";
    }
}
echo "\n";
echo "\n";


// echo "EX_04) ";
// for($i = 0; $i <= 100; $i++){
//     echo ("Estes são os multiplos de $i" . "\n");
//     for($a = 0; $a <= 100; $a++){
//         $multiplo = $i * $a;
//         echo ("$i X $a = $multiplo" . "\n");
//     }
//     echo ("\n");
// }


echo "\n";
echo "\n";
echo "\n";
echo "\n";


echo "MAP FILTER REDUCE";
echo "\n";
echo "\n";
/**
 * MAP FILTER REDUCE
 * 
 * EX06) usando o array fornecido imprima na tela apenas os items que são do tipo String
 * 
 * EX07) usando o array fornecido imprima na tela somente os items que são do tipo Int
 * 
 * EX08) usando o array dado imprima na tela a soma de todos os valores numericos.
 * 
 * EX09) usando o array dado imprima na tela a concatenação de todos os Strings.
 */

$array1 = ['a', 3.14, 42, 'pi', 'some_string', 1, 0, 'b', 1.4, 'c','3.14', 'd', 420, 360, '512', 260, 1.2];

echo "EX_6) Imprimindo todos os tipos String da Array: ";
echo "\n";
$typeString = array_filter($array1, function($item) {
    return is_string($item);
});
print_r($typeString);
echo "\n";
echo "\n";



echo "EX_7) Imprimindo todos os tipos Inteiros da Array: ";
echo "\n";
$typeInt = array_filter($array1, function($item) {
    return is_int($item);
});
print_r($typeInt);
echo "\n";
echo "\n";



echo "EX_8) Imprimindo a soma de todos os valores numericos: ";
echo "\n";
$typeFloat = array_filter($array1, function($item) {
    return is_numeric($item);
});
print_r($typeFloat);
echo "\n";


$somaTodosValores = array_reduce($typeFloat, function($carry, $item){
    return $carry + $item;
}, 0);
print_r( "A soma de todos eles é: " . $somaTodosValores);
echo "\n";
echo "\n";


echo "EX_9) Imprimindo a concatenação de todas as Strings: ";
$concatString = array_reduce($typeString, function($carry, $item){
    return $carry . $item;
}, "");
echo $concatString;

echo "\n";
echo "\n";
echo "\n";
echo "\n";


/**
 * EX10) usando o array dado imprima na tela os paises e suas cidades.
 * 
 * EX11) usando o array dado imprimir na tela somente as cidades que começem com a letra B.
 */

$array2 = [ "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], "França" => ["Paris", "Nantes", "Lyon"], "Itália" => ["Roma", "Milão", "Veneza"], "Alemanha" => ["Munique", "Berlim", "Frankfurt"] ];

echo "EX_10) Estes são todos os paises e suas cidades presentes na array: ";
echo "\n";

// $pais é a chave a array -> a array é o valor desse item, ou seja, as cidades.
foreach($array2 as $pais => $cidades){
    echo "\n";
    echo ($pais);
    echo "\n";
    echo "\n";

    foreach ($cidades as $cidade) {
        echo "$cidade";
        echo "\n";
        echo "\n";
    }
}
echo "\n";
echo "\n";


echo "EX_11) Estas são somente as cidades que começam com a letra B: ";
echo "\n";
echo "\n";
foreach($array2 as $pais => $cidades){
    foreach ($cidades as $cidade) {
        $primeiraLetra = substr($cidade, 0, 1);
        if($primeiraLetra == "B"){
            echo $cidade;
            echo "\n";
        }
    }
}

echo "\n";
echo "\n";
echo "\n";
echo "\n";


/**
 * EX12) usando a função range(), nativa do PHP, construa um array com todos os numeros entre 0 e 1000.
 * 
 * EX13) construa um array com todos as potencias de 2 entre 0 e 100.
 * 
 * EX14) dado o array numerico, ordene ele.
 */

echo "EX_12) Construindo uma array de 0 a 1000 com range() ";
echo "\n";
echo "\n";

$zeroMil = range(0,1000);

// foreach($zeroMil as $number){
//     echo $number;
//     echo "\n";
// };


echo "EX_13) Construindo uma array de 0 a 100 com todas as potencias de 2 ";
echo "\n";
echo "\n";

function powOfTwo2($valor): bool {
    if($valor == 0) { 
        return false;
    }

    // o resto da divisao por 2 é igual a zero? Se for, divide por 2 e refaz o while, até que o valor não seja true e passei para a condição do return == 1.
    while($valor % 2 == 0){
        $valor = $valor / 2;
    }
    return $valor == 1;
};

$zeroCem = range(0,100);
array_filter($zeroCem, function($number) {
    if(powOfTwo2($number)){
        echo $number;
        echo "<hr>";
    }
});
echo "\n";
echo "\n";



$array_numerico = [4 ,5,1, 7,8,0,2,12,456,78,90, 500, 344, 255, 0];
echo "EX_14_ DESAFIO) ORDENE UMA ARRAY SEM USAR SORT ";
echo "\n";
echo "\n";

//exibindo o array numerico da forma como está, não ordenado
for ($i=0; $i < count($array_numerico) ; $i++) {
    echo $array_numerico[$i] .  " ";
}


for ($y = 0; $y <count($array_numerico) ; $y++){

    // este for será para ordenarmos a array da forma em que iremos comparar o valor atual com o próximo
    for ($i=0; $i < count($array_numerico) -1; $i++){ // usaremos -1 pois senão comparariamos com uma próxima chave que não existe

        $posAtual= $i; //temos a posição atual
        $posProx = $i+1; // temos a posição seguinte à atual

        if ($array_numerico[$posAtual] > $array_numerico[$posProx]){ //a lógica será a seguinte-> se o valor que está na posição atual for maior que o valor que está na posição seguinte, executaremos o seguinte código
            $intemediaria = $array_numerico[$posAtual]; // usamos a variavel intermediária pra armazenar a atual
            $array_numerico[$posAtual] = $array_numerico[$posProx]; // o valor da posição atual passa a ser o valor da posição que era seguinte (estamos trocando ela de lugar basicamente)
            $array_numerico[$posProx] = $intemediaria; // pegamos o valor armazenado na variavel $intermediaria e iremos colocar ela no lugar do valor da posição seguinte, fazendo assim os dois valores serem ordenados ENTRE SÍ.
        }

    }
    
    // voltaremos toda essa função para que ela corrija o problema que temos com zero, ja que mesmo comparando e organizando, nosso código vai retornar uma nova array com o zero no meio dela, pra isso devemos fazer todo esse código dentro de um for com o mesmo tamanho da array para que a cada ordenação ele compare o zero até chegar na posição correta.

    // Caso queira ver o erro, tire o for($y= 0)...
}

echo ("\n");
echo ("result final\n");
for ($i=0; $i < count($array_numerico) ; $i++) {
    echo $array_numerico[$i] .  " ";
}
echo ("\n");















// function inserirSort($array): array
// {
//     $tamanhoArray = count($array); // armazenando o tamanho da array
//     $i = 1; // definindo o começo, sendo índice 1

//     while($i < $tamanhoArray){  //enquanto a iteracao for menor que o tamanho da array, execute o codigo abaixo
//         $x = $array[$i]; // Em X é armazenado o valor do indice atual da iteração
//         $j = $i - 1; // Em J estamos armazenando a iteração atual - 1, ou seja, o valor antes da iteração atual

//         while($j >= 0 && $array[$j] > $x){ 
//             $array[$j + 1] = $array[$j];
//             $j = $j - 1;
//         }
//         $array[$j+1] = $x;
//         $i = $i + 1;
//     }

//     return $array;
// }

// var_dump(inserirSort($array_numerico));




?>  
</body>
</html>
