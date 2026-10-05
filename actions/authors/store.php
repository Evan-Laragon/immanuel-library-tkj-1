<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    print_r($_POST);
}
?>