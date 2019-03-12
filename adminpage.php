<?php
    $msg="";
   if(isset($_POST['upload'])){
       $target="images/".basename($_FILES['image']['name']);
        
       $db = mysqli_connect("localhost","root","","photos");

       $image=$_FILES['image']['name'];
       $texthead=$_POST['texthead'];
       $text=$_POST['text'];

       $sql="INSERT INTO images(image,texthead,text) VALUES ('$image','$texthead','$text')";
       mysqli_query($db, $sql);

       if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
           $msg="image upload successfully";
               
       }
       else{
           $msg="there is problem in file uploading";

       }
   }
   ?>

<!DOCTYPE html>
<html>
<head>
  
    <title>admin page</title>
    <link rel="stylesheet" type="text/css" href="../myproject/css/adminstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Roboto" rel="stylesheet"> 
</head>
<body>
    <h1>WRITE SOMETHING NEW :)</h1>
    <form method="post" action="do_logout.php">
     <button type="submit" class="btno" name="logout">Logout</button>
    </form>
    <div id="content">
     <form method="POST" action="adminpage.php" enctype="multipart/form-data">
       <input type="hidden" name="size" value="1000000">
       <div>
           <input type="file" name="image">

       </div>
         <div>
           <textarea id="text" name="texthead" cols="50" rows="1" placeholder="title of news :)"></textarea>
          
         </div>
         <div>
           <textarea id="text" name="text" cols="50" rows="13" placeholder="write someting new :)"></textarea>
          
         </div>
         <div>
             <input type="submit" name="upload" value="PUBLISH NEWS">
         </div>
          
          <div>
              <h1>Edit last added news</h1>
            <?php
          $db= mysqli_connect("localhost","root","","photos");
          $sql="SELECT * FROM images ORDER BY id DESC LIMIT 1";
          $result=mysqli_query($db,$sql);
           while($row=mysqli_fetch_array($result)){
           echo "<p>".$row['texthead']."</p>";
           echo "<a  href='../myproject/edit.php?id=$row[id] & head=$row[texthead] & info=$row[text]'>EDIT</a>&nbsp;&nbsp;";
           echo "<a href='delete.php?id=$row[id]'onclick=' return checkdelete()'>DELETE</a>&nbsp;";
             }
          ?>
              <a href='editold.php'>EDIT OLD NEWS</a>
          </div>

     </form>


    </div>
    <script>
      function checkdelete()
      {
          return confirm('Are you sure you want to delete this News?');
      }
    </script>
</body>
</html>