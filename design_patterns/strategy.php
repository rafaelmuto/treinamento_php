<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinamento PHP: Strategy</title>
    <style>
        * {
            font-family: monospace;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            margin: 100px auto;
            padding: 1rem;
            background-color: #ffffff;
            border: 3px solid #000000;
            border-radius: 5px;
            max-width: 900px;
            color: #000000;
        }

        .logs {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Object-Oriented Programing</h1>
        <hr>
        <pre>
            <?php



            function calcularImpostoA(Produto $produto): float
            {
                return $produto->getValor() * .1;
            }

            function calcularImpostoB(Produto $produto): float
            {
                return $produto->getValor() * .15;
            }

            function calcularImpostoC(Produto $produto): float
            {
                return $produto->getValor() * .6;
            }


            function calcularTotal(Produto $produto): float
            {
                $valor = $produto->getValor();

                $valor += calcularImpostoA($produto);
                $valor += calcularImpostoB($produto);
                $valor += calcularImpostoC($produto);

                return $valor;
            }



            class Produto
            {
                private float $valor;

                public function __construct(float $valor)
                {
                    $this->valor = $valor;
                }

                public function getValor(): float
                {
                    return $this->valor;
                }
            }

            ?>
    </pre>
    </div>
</body>

</html>