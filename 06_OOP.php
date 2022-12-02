<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinamento PHP</title>
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
            include 'oop/include_this.php';

            echo '<div class=logs>';

            $car = new Car(1);

            $moto = new Moto(1);

            $cachorro = new Cachorro();

            rastrearTrackable($moto);

            echo '</div><hr>';
            print_r($car->getInfo());


            function rastrearTrackable(Trackable $trackableObject)
            {
                echo $trackableObject->getLocation();
            }

            ?>
    </pre>
    </div>
</body>

</html>