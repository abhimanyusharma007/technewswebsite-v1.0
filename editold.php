<!DOCTYPE html>
<html>
<head>
    <title>edit old post</title>
    <link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../myproject/css/editold.css"> 
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "\myproject\css\materialize.min.css">
      <script type = "text/javascript"src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "\myproject\js\materialize.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".edit1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>
    <center>
    <form method="POST" action="adminpage.php" enctype="multipart/form-data">
    <div>
              <h1>EDIT OLD NEWS</h1>
              <nav>
          <div class="nav-wrapper">
         <form>
         <div class="input-field">
          <input id="search" type="search"required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
       </form>
       </div>
       </nav>
            <?php
          $db= mysqli_connect("localhost","root","","photos");
          $sql="SELECT * FROM images ORDER BY id DESC";
          $result=mysqli_query($db,$sql);
           while($row=mysqli_fetch_array($result)){
           echo "<div class='edit1'>";
           echo "<p>".$row['texthead']."</p>";
           echo "<a  href='../myproject/edit.php?id=$row[id] & head=$row[texthead] & info=$row[text]'>EDIT</a>&nbsp;&nbsp;";
           echo "<a href='delete.php?id=$row[id]'onclick=' return checkdelete()'>DELETE</a>&nbsp;";
           echo "</div>";
             }
          ?>
          </div>
    </form>
            </center>
</body>
</html>