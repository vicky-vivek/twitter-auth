<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
require 'autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', 'riQi3K1H4g7i7GEBW16Q7dLHV'); 
define('CONSUMER_SECRET', 'WWgNP43ygeE5dJO03ZhyrpfpW8oUBGswyq7tt6rQRBkeAmMCjI'); 
define('OAUTH_CALLBACK', 'http://127.0.0.1:8080/twitter/callback.php');


$request_token = [];
$request_token['oauth_token'] = $_SESSION['oauth_token'];
$request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];


if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
    echo "something is wrong<br/>";
   /* echo "request_token:  ".$request_token['oauth_token'];
    echo "<br/>";
    echo "Request:  ".$_REQUEST['oauth_token'];
    echo "<br/>";
    echo "session:  ".$_SESSION['oauth_token'];
    echo "<br/>";
    echo "session:  ".$_SESSION['key'];*/
    print_r($_SESSION);
}else{
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);

	$access_token = $connection->oauth("oauth/access_token", ["oauth_verifier" => $_REQUEST['oauth_verifier']]);
	$_SESSION['access_token'] = $access_token;

	//header('location:index.php');
	echo "Nothing is wrong";
}