<?php 
    $dbname  = 'ci02170_db';
    $dbuser = 'ci02170_db';
    $dbpassword = 'CWjPgY13';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpassword);
    $stmt= $pdo->query('SELECT * FROM orders ORDER BY id DESC');
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Orders</title>
        <style>
            <?php echo file_get_contents("css/style.css"); ?>  
        </style>
    </head>
    <body>
        <h1>Table of orders</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>E-mail</th>
            </tr>
            <?php
            foreach ($stmt as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>