<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<div class="icon"></div>
<input id="login" type="button" value="Log in with Twitter" onclick="redirect();"/>
</div>
<div class="wrapper" style="margin-top:200px;">
<i>hey! its cool to login here.</i><br/>
This is a test app for twitter api integration.<br/>
Click on "<i>Log in with Twitter</i>" button.
</div>
<script>
function redirect(){
alert();
window.location='http://127.0.0.1/app/redirect.php';
}
</script>
</body>
</html>