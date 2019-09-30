<html>

<!-- CSS LINK -->
<head>
<div class="loginpg1" style="padding: 10px; text-align: center; font-family: arial; position: center;">
  <h1>LOGIN</h1>
  </div>
  <link type="text/css" rel="stylesheet" href="/stylesheets/style.css" />
</head>

<body>
  <?php
  if(isset($_POST['username']) && isset($_POST['password']) && ($_POST['username'] == "" || $_POST['password'] =="")){
    echo "Username or password cant be empty";
  }
  else{
    ?>
    <div class="loginpg2" style="padding: 200px; text-align: center; font-family: arial; position: center;">
    <form action="/main" method="post">
    <div>Enter Username<textarea name="username" rows="1" cols="10"></textarea></div>
    <div>Enter Password<textarea name="password" rows="1" cols="10"></textarea></div>
    <div><input type="submit" value="Submit"></div>
    <a href="/register">Register</a>
    </form>
    </div>
    <?php
  }
  session_destroy();
  $handle = fopen('gs://s3605398assign1/users.txt','w');
  fwrite($handle, $_POST['username'].",".$_POST['password']);
  fclose($handle);
  ?>
</body>
</html>
