<!DOCTYPE html>
<html>
<head>
    <title>Signup page</title>
    <link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet"> 
    <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "\myproject\css\materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "\myproject\js\materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="\myproject\css\signupstyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
<style>
  

  .container {
      position:absolute;
      top:23%;
      left:33%;
      max-width: 500px;
      padding: 16px;
      background-color: white;
      border-radius:10px; 
      box-shadow:0 4px 8px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.10);
  }
  
  </style>
  </head>
  <body>
  <div>
    <form method="post" action="do_signup.php" enctype="multipart/form-data" class="container">
       <h5 id="tp">Create your tech news hub account</h5>
       <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="fname" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lastname" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
    <div class="row">
       <div class="input-field col s12">
            <input id="first_name" type="text" class="validate" name="username" required>
            <label for="first_name">Username</label>
          </div>
    </div>     
    <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="txtpassword" required>
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="txtrepassword" required>
          <label for="confirm_passwod">Confirm password</label>
        </div>
      </div>
        <button type="submit" class="btno" name="submit">Create account</button>
    </form>
       
  </div>
  
</body>
</html>