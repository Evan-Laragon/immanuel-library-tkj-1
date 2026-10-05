<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    print_r($_POST);
}
?>