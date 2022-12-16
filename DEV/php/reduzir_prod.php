<?php

    session_start();

    $cd_prod = $_GET['cd'];

    $qnt = $qnt - 1;

    header('location: ../carrinho.php');

?>