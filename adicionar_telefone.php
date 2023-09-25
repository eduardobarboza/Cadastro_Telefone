<?php
session_start();

if (isset($_POST['numero']) && !empty($_POST['numero'])) {
    
    $_SESSION['telefones'][] = $_POST['numero'];
}

header('Location: index.php');
?>
