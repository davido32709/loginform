/*<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Nieudane połączenie: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS mywebdb";
if ($conn->query($sql) === TRUE) {
    echo "Baza danych utworzona pomyślnie";
} else {
    echo "Błąd podczas tworzenia bazy danych: " . $conn->error;
}

$conn->select_db("mywebdb");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
	phone VARCHAR(9) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabela utworzona pomyślnie";
} else {
    echo "Błąd podczas tworzenia tabeli: " . $conn->error;
}

$conn->close();
?>
*/

POLECENIA DLA BAZY DANYCH

CREATE DATABASE mywebdb;
USE mywebdb;
CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    upassword VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
	phone VARCHAR(9) NOT NULL UNIQUE);