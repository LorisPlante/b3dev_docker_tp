<?php
$host = 'mariadb';
$db = 'docker_tp';
$user = 'root'; 
$pass = 'dockertp'; 
$pdo = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
$stmt = $pdo->query('SELECT DATABASE()');
echo $stmt->fetchColumn();
?>