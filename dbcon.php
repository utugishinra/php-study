<?php

$dbh = new PDO('mysql:host=localhost;dbname=php-study', 'root', 'root');

$res = $dbh->query('SELECT * from user');
while( $user = $res->fetch( PDO::FETCH_LAZY ) ){
    printf('<li>%s : %s</li>', $user->id, $user->name);
}



$dbh = null;
?>