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

$i = 0;

// echo "EX 01"
// while($i <= 100) {
//     echo $i;
//     echo "\n";
//     $i++;
// }

// echo "EX 02"
// for ($i = 0; $i <= 100; $i++) {
//     echo $i;
//     echo "\n";
// }

// echo "Ex 03";
// echo "\n";
// for ($i = 0; $i <= 100; $i++) {
//     // if $i % 2 == 0 ? echo $i : echo $i;
//     // if ($i % 2 == 0) {
//     //     echo "$i";
//     //     echo "\n";
//     // }

//     // if ($i % 3 == 0) {
//     //     echo "$i";
//     //     echo "\n";
//     // }
    
//     if ($i % 3 == 0 || $i % 2 == 0) {
//         echo "$i";
//         echo "\n";
//     }
// }

// echo "Ex 04";
// echo "\n";
// foreach(range(0, 100) as $firstNumber) {
//     foreach(range(0, 10) as $secondNumber) {
//         echo $firstNumber . " x " . $secondNumber . " = " . ($firstNumber * $secondNumber);
//         echo "\n";
//     }
//     echo "\n";
// }


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

$array = ['a', 3.14, 42, 'pi', 'some_string', 1, 0, 'b', 1.4, 'c','3.14', 'd', 420, 360, '512', 260, 1.2];

// echo "Ex 06";
// foreach ($array as $item) {
    // if (gettype($item) == "string") {
    //     var_dump(($item));
    // }
// }

// echo "Ex 07";
// foreach ($array as $item) {
//     if (filter_var($item, FILTER_VALIDATE_INT) !== false) {
//         echo "$item";
//         echo "\n";
//     }
// }

// echo EX08
// $sum = 0;
// foreach ($array as $item) {
//     if (filter_var($item, FILTER_VALIDATE_FLOAT)) {
//         $sum += $item;
//     }
// }
// echo $sum;

// echo "EX 09"
// $stringConcat = '';
// foreach ($array as $item) {
//     if (gettype($item) == "string") {
//         $stringConcat .= $item . ',';
//     }
// }
// echo $stringConcat;

/**
 * EX10) usando o array dado imprima na tela os paises e suas cidades.
 * 
 * EX11) usando o array dado imprimir na tela somente as cidades que começem com a letra B.
 */

$array = [ "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"], "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], "França" => ["Paris", "Nantes", "Lyon"], "Itália" => ["Roma", "Milão", "Veneza"], "Alemanha" => ["Munique", "Berlim", "Frankfurt"] ];

// echo "EX10";
// echo "\n";
// foreach($array as $key=>$country) {
//     echo strtoupper($key);
//     echo "\n";
//     foreach($country as $states) {
//         echo $states;
//         echo "\n";
//     }
//     echo "\n";
// }

// echo "EX11";
// echo "\n";
// foreach($array as $key=>$country) {
//     foreach($country as $states) {
//         if (substr($states, 0, 1) == 'B') {
//             echo $states;
//             echo "\n";
//         }
//     }
// }

/**
 * EX12) usando a função range(), nativa do PHP, construa um array com todos os numeros entre 0 e 1000.
 * 
 * EX13) construa um array com todos as potencias de 2 entre 0 e 100.
 * 
 * EX14) dado o array numerico, ordene ele.
 */

 $array_numerico = [4 ,5,1, 7,8,0,2,12,456,78,90, 500, 344, 255, 0];

//  echo "EX12";
//  echo "\n";
//  foreach(range(0, 1000) as $number) {
//      echo $number;
//      echo "\n";
//  }

// echo "EX13";
// echo "\n";


// echo "EX14";
// echo "\n";
sort($array_numerico);
foreach($array_numerico as $item) {
    echo $item;
    echo "\n";
}

?>  
</body>
</html>
