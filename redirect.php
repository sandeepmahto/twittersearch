<?php
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$request_token = $connection->getRequestToken(OAUTH_CALLBACK);
session_start();
$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

if ($connection->http_code == 200) {
	$url = $connection->getAuthorizeURL($token);
	header('Location: ' . $url);
}
else{
	echo 'Could not connect to Twitter.';
}