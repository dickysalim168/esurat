<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css2/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Mail Cloud</h1>
		<form  id="loginform" action="login.php" method="post"> 
        <p><input type="text" name="username" id="username" value="" placeholder="Nama Pengguna / No KP"></p>
        <p><input type="password" name="password" value="" id="userpassword" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Ingat Katalaluan
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        <input type="hidden" name="btnSubmit" value="Login">
      </form>
    </div>


  </section>


</body>
</html>