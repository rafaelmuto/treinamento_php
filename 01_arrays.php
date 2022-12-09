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
 *  => WHILE DO WHILE 
 * */ 

// $i = 0;
// while($i < 16) {
//     echo $i;
//     echo "\n";
//     $i++;
// }

// $i = 0;
// do {
//     echo $i;
//     echo "\n";
//     $i++;
// } while ($i < 16);



/**
 *  => FOR
 */

// for($i = 0; $i < 32; $i++) {
//     // do something here...
//     echo $i;
//     echo "\n";
// }




/**
 *  => ARRAYS
 */


$array_0 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$array_1 = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584];

$array_2 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'];

$array_3 = ['a', 42, 'some_string', 1, 0, 'b', 'c', 'd', 420, 360, '512', 260];

$array_4 = ["Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=>"Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha"=>"Berlim", "Grécia"=>"Atenas", "Irlanda"=>"Dublin", "Holanda" => "Amsterdã", "Portugal" => "Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia"];

$array_5 = [ "Argentina" => ["Buenos Aires" => ['El Caminito', 'Messito'], "Córdoba", "Santa Fé"], "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"], "França" => ["Paris", "Nantes", "Lyon"], "Itália" => ["Roma", "Milão", "Veneza"], "Alemanha" => ["Munique", "Berlim", "Frankfurt"] ];


// print_r($array_5);
// print_r($array_5['Argentina']['Buenos Aires'][1]);


/**
 *  => FOREACH
 */

foreach($array_1 as $item) {
    print_r($item);
    echo "\n";
}





/**
 *  => MAP
 */
// $result = [];
// foreach($array_0 as $item) {
//     $result[] = $item * 10;
// }
// print_r($result);


// $result = array_map(function($item) {
//     return $item ** 2;
// }, $array_1);
// print_r($result);




/**
 *  => FILTER
 */

// $result = [];
// foreach($array_0 as $item) {
//     if($item % 2 == 0) {
//         $result[] = $item;
//     }
// }
// print_r($result);


// $result = array_filter($array_1, function($item) {
//     return $item % 2 == 0;
// });
// print_r($result);





/**
 *  => REDUCE
 */

// $result = 0;
// foreach($array_0 as $item) {
//     $result = $result + $item;
// }
// print_r($result);

// $result = array_reduce($array_0, function($carry, $item) {
//     return $carry + $item;
// }, 0);
// print_r($result);



?>  
</body>
</html>




