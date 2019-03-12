<?php
    $msg="";
   if(isset($_POST['upload'])){
        
       $db = mysqli_connect("localhost","root","","photos");
       $texthead=$_POST['texthead'];
       $text=$_POST['text'];
       $id=$_POST['id'];
       $sql="UPDATE images SET texthead='$texthead',text='$text' WHERE id='$id'";
       mysqli_query($db, $sql);
       header('location:adminpage.php');
   }
   ?>
<!DOCTYPE html>
<html>
<head>
  
    <title>edit page</title>
    <link rel="stylesheet" type="text/css" href="../myproject/css/editstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Pattaya|Roboto" rel="stylesheet"> 
</head>
<body>
    <h1 id="head1">EDIT NEWS:)</h1>
    <div id="content">
     <form method="POST"enctype="multipart/form-data">
       <input type="hidden" name="size" value="1000000">
       <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
         <div>
             <h3 class="head2">TITLE OF NEWS</h3>
           <textarea id="text" name="texthead" cols="50" rows="1"><?php echo $_GET['head']?></textarea>
          
         </div>
         <div>
              <h3 class="head2">NEWS INFO</h3>
           <textarea id="text" name="text" cols="50" rows="13"><?php echo $_GET['info']?></textarea>
          
         </div>
         <div>
             <input type="submit" name="upload" value=" RE PUBLISH NEWS">
         </div>

     </form>


    </div>
</body>
</html>