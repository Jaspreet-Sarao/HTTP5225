<?php
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $query = "DELETE FROM schools WHERE id = $id";
    mysqli_query($connect, $query);
}

header('Location: index.php');
exit(); 
?>
