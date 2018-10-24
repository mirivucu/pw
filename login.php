<!DOCTYPE html>
<html>
<head>
  <title>Login</title>

  <script src="js/login.js"></script>
</head>
<body>
  <div id="content">
  <div class="header">
   <h2>Login</h2>
  </div>
    
  <form method="POST" action="index.php">
   <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" required>
   </div>
   <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" required>
   </div>
   <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
   </div>
   <p>
      Not yet a member? <a href="#" onClick="return registerPage();">Sign up</a>
   </p>
  </form>
</div>
</body>
</html>