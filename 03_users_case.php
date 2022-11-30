<?php
include 'users.php';


echo '<pre>';

foreach ($users as $user) {

    echo '<hr>';

    var_dump($user['email']);

    var_dump($user['name']['first']);

    echo '<hr>';

    // var_dump($user);

    // die();
}
