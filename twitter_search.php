<?php
$q =$_POST["query"];
$notweets=4;
$url = "https://api.twitter.com/1.1/search/tweets.json?q=%20{$q}&count=4";
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
session_start();

$connection= new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$_SESSION['oauth_token'],$_SESSION['oauth_token_secret']);
$tokens=$_SESSION['oauth_verifier'];
$connection= new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$tokens['oauth_token'],$tokens['oauth_token_secret']);
$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=".urlencode($q)."&result_type=mixed&count=5");
?>
<!doctype html>
<html>
<head>
<title>Twitter Search...</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper" style="text-align:left;">
<ol>
<?php
for ($i=0; $i<count($tweets->statuses); $i++){
echo "<li>".$tweets->statuses[$i]->text ." <b>by</b> <i style='color:#34a5cf;'>".$tweets->statuses[$i]->user->name . "</i></li>";
}
?>
</ol>
<input id="submit" type="submit" value="Start over" onclick="start();">
<script>
function start(){window.location="http://127.0.0.1/app/index.php";}
</script>
</div>
</body>
</html>