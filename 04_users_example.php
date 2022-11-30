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

        .user_box {
            border: 1px solid #000000;
            border-radius: 3px;
            margin: 1rem 0;
            padding: .5rem;
            display: grid;
            grid-template-columns: 128px 1fr;
            column-gap: 1rem;
        }

        .user_box:nth-child(odd) {
            background-color: #ecf0f1;
        }

        .user_box:nth-child(even) {
            background-color: #bdc3c7;
        }

        .user_box img {
            border-radius: 50%;
            /* margin: .5rem; */
        }
    </style>
</head>

<body>

    <div class="container">

        <h1> Usuarios: </h1>
        <hr>
        <br>

        <?php
        include 'users.php';

        echo '<pre>';

        foreach ($users as $user) {
            echo '<div class="user_box">';

            echo '<img src=' .  $user['picture']['large'] . '>';

            echo '<div class="user_info">';
            echo '<p>' . $user['name']['title'] . ' ' . $user['name']['first'] . ' ' . $user['name']['last'] . ' [' . $user['nat'] . ']</p>';
            echo '<p>Address: ' . $user['location']['street']['number'] . ' ' . $user['location']['street']['name'] . $user['location']['city'] . ' - ' . $user['location']['state'] . ' - ' . $user['location']['country'] . ' ZIPCODE: ' . $user['location']['postcode'] . '</p>';
            echo '<p>Timezone: ' . $user['location']['timezone']['description'] . ' (' .  $user['location']['timezone']['offset'] . ') </p>';
            echo '<p>E-mail: ' . $user['email'] . '   Phone: ' . $user['phone'] . '   Mobile: ' . $user['cell'] . '</p>';

            echo '</div>';

            echo '</div>';
        }

        ?>

    </div>


</body>

</html>