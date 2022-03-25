<?php
    $dsn = 'mysql:host=localhost; dbname=zippyusedautos';
    $username = 'root';

    try{
        $db = new PDO($dsn, $username);

    } catch (PDOException $e){
        $error_message = 'Database Error';
        $error_message .= $e->getMessage();
        include('database_error.php');
        exit();
    }
?>