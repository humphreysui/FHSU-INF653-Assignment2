<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
    /* $username = 'mgs_user';
    $password = 'pa55word'; */
    $username = 'root';
    $password = 'sesame';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>