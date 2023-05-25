<?php

include 'DBC.php';

insertUser($_POST["regName"], $_POST["regPassword"]);

function insertUser($username, $password)
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $connection = DBC::getConnection();
    $statement = $connection->prepare("INSERT INTO users (username, psswrd) VALUES (?, ?)");
    $statement->bind_param("ss", $username, $hashedPassword);
    return $statement->execute();
}
