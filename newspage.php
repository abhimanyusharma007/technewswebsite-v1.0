<!DOCTYPE html>
<html>
<head>
    <title>News page</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../myproject/css/newspagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton|Asap" rel="stylesheet"> 
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "\myproject\css\materialize.min.css">
      <script type = "text/javascript"src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "\myproject\js\materialize.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".news").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>
    <center>
     <h1 class="tp">TECH NEWS HUB</h1>
    </center>
    <ul id="mode">
        <li id="mode1">
            <span class="mode2">Dark</span>
            <span class="mode2">Light</span>
        </li>
    </ul>
    <div id="menu-bar">
    <ul>
                        <li> <a href="">Home</a></li>
                        <li> <a href="contact.php">Contact</a></li> 
                        <li> <a href="index.php">Logout</a></li> 
                      
                </ul>
        <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" placeholder="Search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
     </div>
     </nav>
     
         
    </div>

   <?php
       $db= mysqli_connect("localhost","root","","photos");
       $sql="SELECT * FROM images ORDER BY id DESC";
       $result=mysqli_query($db,$sql);
       while($row=mysqli_fetch_array($result)){
           echo"<div>";
           echo"<div class='news'>";
           echo "<h1 class='newshead'>".$row['texthead']."</h1>";
           echo "<img class='newsimg' src='images/".$row['image']."'>";
           echo "<p class='newsinfo'>".$row['text']."</p>";
           echo"</div>";
           echo"</div>";
         }
    ?>

    <script src="../myproject/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
           $('#mode').click(function(){
               $('#mode').toggleClass('active')
               $('body').toggleClass('dark')
               $('tp').toggleClass('dark')
           })
       })
    </script>
    

</body>
</html>