<html>

<!-- CSS LINK -->
<head>
  <link type="text/css" rel="stylesheet" href="/stylesheets/style.css" />
  <h1>
    SalesCar
  </h1>
</head>

<body>
<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$handle = fopen('gs://s3605398assign1/users.txt','r');
while(!feof($handle)){
  $details = fgets($handle);
}
$userDeets = explode(",",$details);
if($userDeets[0] == $_SESSION['username'] && $userDeets[1] == $_SESSION['password']){
  echo 'Logged in as '.$_SESSION['username'];
?>
<a href="/">Log Out</a>
<h1>Main Content</h1>
<?php
}
else{
  echo "User name or password is invalid, please try again";
}
fclose($handle);

?>
</body>
</html>
