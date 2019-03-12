<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet"> 
<link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "\myproject\css\materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "\myproject\js\materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="\myproject\css\loginpage.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  

.container {
    position:absolute;
    top:25%;
    left:37%;
    max-width: 350px;
    padding: 16px;
    background-color: white;
    border-radius:10px; 
    box-shadow:0 4px 8px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.10);
}

</style>
</head>
<body>
<div>
  <form method="POST" action="do_login.php" class="container">
     <h5 id="tp">WELCOME TO TECH NEWS HUB</h5>
  <div class="row">
     <div class="input-field col s12">
          <input id="first_name" type="text" class="validate" name="username" required>
          <label for="first_name">Username</label>
        </div>
  </div>     
  <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="txtpassword" required>
          <label for="password">Password</label>
        </div>
      </div>
      <button type="submit" class="btno" name="submit">Login</button>
      <a href="\myproject\signup.php">Create account</a>
  </form>
     
</div>


</body>
</html>