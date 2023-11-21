<?php 

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // ci02170_db
    // CWjPgY13

    $dbname  = 'ci02170_db';
    $dbuser = 'ci02170_db';
    $dbpassword = 'CWjPgY13';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpassword);

    $stmt = $pdo->prepare('INSERT INTO orders(name, phone, email) VALUES(:name, :phone, :email)');
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':email', $email);

    if ($stmt->execute()){
        echo '1';
    }

    //echo '<h1>Имя: ' . $name . '</h1>';
    //echo '<h1>Телефон: ' . $phone . '</h1>';
    //echo '<h1>Почта: ' . $email . '</h1>';



