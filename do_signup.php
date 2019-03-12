<?php
$db = mysqli_connect("localhost","root","","signup");

if(isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    $lastname=$_POST["lastname"];
    $username=$_POST["username"];
    $pass=$_POST["txtpassword"];

 $query=mysqli_query($db,"INSERT INTO register(name,lastname,username,pass) VALUES('$fname','$lastname','$username','$pass')");
  if($query){
      header("Location:index.php");
  }
  else{
      echo"fail query";
  }
}
?>