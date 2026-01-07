<!DOCTYPE html>

<head>
 
  <title> Login Form </title>
  <style >
    
  </style>
<link rel="stylesheet" href="./style.css">

</head>
<body>
 <header>
  <marquee direction="right">
<P class="smm" align="center" style="color: brown;"><h1>VSPIRE INNOVATION LTD.</h1></P>
</header>
</marquee>
<hr>

<hr>


<div class="login-form-wrap">
  <h2>Login</h2>
 
  <form method="post" action=" login_process.php">
 <p>
    <input type="text"  name="email" placeholder=" EMAIL ID" required>
    </p>
<p>
    <input type="password"  name="password" placeholder="Password" required>
    </p>
       
  <p>
    <input type="submit"name="submit" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="insert.php">Create Account</a><p>
  </div>
</div>

  
</body>
</html>
