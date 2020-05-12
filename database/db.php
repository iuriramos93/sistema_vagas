<?php 

function conexao() {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=jobfinder","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set names utf8");
        return $conn;
    } catch (PDOException $e) {
        die($e->getMessage());
        return null;
    }
}
