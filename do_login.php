<?php
$db= mysqli_connect("localhost","root","","signup");
  if(isset($_POST["submit"])){
      $username=$_POST["username"];
      $pass=$_POST["txtpassword"];

      $query=mysqli_query($db,"SELECT username,pass,type FROM register");
       while ($row=mysqli_fetch_array($query)) 
      {
          $db_uname=$row["username"];
          $db_pass=$row["pass"];
          $db_type=$row["type"];
          if($username==$db_uname && $pass==$db_pass){
              session_start();
              $_SESSION["username"]=$db_uname;
              $_SESSION["type"]=$db_type;
              if($_SESSION["type"]=='admin'){
                  header("Location:\myproject\adminpage.php");
              }
              else{
                header("Location:newspage.php");
              }
          }
      }
  }
?>