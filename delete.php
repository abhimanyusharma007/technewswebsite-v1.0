<?php
 $db= mysqli_connect("localhost","root","","photos");
 $newsid=$_GET['id'];
 $query="DELETE FROM images WHERE ID='$newsid'";
 $data= mysqli_query($db,$query);
  if ($data){
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/myproject/adminpage.php">
      <?php
  }
    ?>
