<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Tiago</title>
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
        <h1>Orientação a Objetos do Tiago - Eletronicos</h1>
        <hr>
        <pre>
            <?php
            include 'ooptiago/Engine.php';
            include 'ooptiago/Display.php';
            include 'ooptiago/AudioEnable.php';
            include 'ooptiago/Tv.php';
            include 'ooptiago/Monitor.php';

            echo '<div class=logs>';



            $tv = new Tv();

            echo '</div><hr>';
            print_r($tv);

            ?>
    </pre>
    </div>

</body>

</html>