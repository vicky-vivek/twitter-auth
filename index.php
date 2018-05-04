<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & E_WARNING);

if(!isset($_SESSION['access_token'])){
	include 'login.php';
}else{
	include 'logout.php';
}