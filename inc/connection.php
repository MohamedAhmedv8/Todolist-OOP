<?php
try {
    $conn = new PDO("mysql:host=localhost;port=3306;dbname=db-todolist", "root", "");
} catch (Exception $error) {
    echo "msg:" . $error->getMessage();
}
