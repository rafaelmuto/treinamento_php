<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinamento</title>
    <style>
        * {
            font-family: monospace;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: black;
        }

        h3{
            font-weight: lighter;
        }

        h3 span{
            font-weight: bold;
        }

        .interpol_image{
            width: 100px;
            margin: 50px 0 15px 0;
        }

        .container{
            color: white;
            margin: 50px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 800px;
            border: 2px solid white;
        }

        .container_assassins{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            gap: 50px;
            margin-bottom: 50px
        }

        .container_title{
            margin: 30px 0 40px 0;
            border-bottom: 1px solid grey;
        }

        .assassin_box {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 20px;
            gap: 20px;

            opacity: 0.4;
            border: 1px solid #ffffff;
            transition: 0.6s;
        }

        .assassin_box img{
            border-radius: 4px;
            filter: grayscale(60%);
        }

        .assassin_box:hover{
            opacity: 1;
            box-shadow: 12px 12px 30px rgba(0, 42, 255, 0.825), -12px -12px 30px rgba(255, 0, 0, 0.696);
        }

        .assassin_information{
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            align-content: flex-start;
        }

        .assassin_information h1{
            border-bottom: 1px solid grey;
            margin-bottom: 10px;
        }

        .assassin_data{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="INTERPOL_Logo.png" alt="interpol" class="interpol_image" >        
        <h1 class="container_title">Lista de Procurados pela INTERPOL</h1>



        <?php
        include 'users.php';


        echo '<div class="container_assassins">';
        foreach($users as $user){
        

        echo '<div class="assassin_box">';

            echo '<img src=' . $user['picture']['large'] . '>';
            
            echo '<div class="assassin_information">';
                echo '<h1>' . 'Identidade Particular' . '</h1>';
                echo '<div class="assassin_data">';
                    echo '<h3>' . '<span>Nome:</span> ' . $user['name']['first'] . " " . $user['name']['last'] .'</h3>';
                    echo '<h3>' . '<span>Data de Nascimento:</span> ' . $user['dob']['date'] . '</h3>';
                    echo '<h3>' . '<span>Idade:</span> ' . $user['dob']['age'] . '</h3>';
                    echo '<h3>' . '<span>Local de Nascimento:</span> ' . $user['location']['state'] . ', ' . $user['location']['country'] . '</h3>';
                    echo '<h3>' . '<span>Nacionalidade:</span> ' . $user['nat'] . '</h3>';
                    if ($user['dob']['age'] >= 60) {
                        echo '<h3>' . '<span>Crime:</span> Deixou de declarar imposto de renda' . '</h3>';
                    } elseif ($user['dob']['age'] >= 40 && $user['dob']['age'] < 60) {
                        echo '<h3>' . '<span>Crime:</span> Assassinato' . '</h3>';
                    } else {
                        echo '<h3>' . '<span>Crime:</span> Tráfico de drogas' . '</h3>';
                    }
                echo '</div>';
                
            echo '</div>';

        echo '</div>';


        echo "\n";
        echo "\n";
        echo "\n";
        echo "\n";
        }


        echo '</div>';
        ?>
    
    </div>


</body>

</html>