<?php
$user = 'u67391';
$pass = '1446539';

try {
    $db_conn = new PDO('mysql:host=localhost;dbname=u67391', $user, $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	
} catch (PDOException $e) {
	die($e->getMessage());
}