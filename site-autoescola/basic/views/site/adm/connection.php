<?php
    try {
        $host = '216.158.230.154';
        $dbname = 'wsboxnet_autoescola';
        $username = 'wsboxnet_autoescola';
        $password = 'wsboxnet_autoescola';

        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        print '<strong>Falha ao conectar Banco de Dados: </strong>' . $e->getMessage();
    }
?>
