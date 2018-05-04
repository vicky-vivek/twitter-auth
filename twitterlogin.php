<?php
session_start();


error_reporting(E_ALL & E_NOTICE & E_WARNING);
require 'autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', 'riQi3K1H4g7i7GEBW16Q7dLHV'); 
define('CONSUMER_SECRET', 'WWgNP43ygeE5dJO03ZhyrpfpW8oUBGswyq7tt6rQRBkeAmMCjI'); 
define('OAUTH_CALLBACK', 'http://127.0.0.1:8080/twitter/callback.php'); 


if (!isset($_SESSION['access_token'])) {
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	//$connection->setTimeouts(10, 15);
	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
	$_SESSION['key'] = "keyset";
	$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
	
	echo $url;
	//print_r($_SESSION);
}


?>