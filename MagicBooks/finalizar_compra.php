<?php
session_start();
require "src/CompraDAO.php";

$compraDAO = new CompraDAO();
$resp = $compraDAO->cadastrarCompra($_SESSION);

if ($resp > 0)
    header("Location:sucesso.php");

?>