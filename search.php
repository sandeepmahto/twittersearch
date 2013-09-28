<?php
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
$connection= new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$_SESSION['oauth_token'],$_SESSION['oauth_token_secret']);
$_SESSION['oauth_verifier']=$connection->getAccessToken($_GET['oauth_verifier']);
?>
<!doctype html>
<html>
<head>
<title>Twitter Search...</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<form method="post" action="twitter_search.php">
<input id="query" type="text" name="query" placeholder="Enter text to search"></input>
<input id="submit" type="submit" value="Search" style="line-height:0;"></input><br/>
<i>Want to search somthing on twitter. Type in text box and click on seach button.</i>
</form>
</div>
</body>
</html>