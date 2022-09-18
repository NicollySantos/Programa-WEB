<?php
session_start();

if(!isset($_SESSION['txUsuario'])){
	header('index.php');
	exit;
}
?>