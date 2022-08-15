<?php
include('header.php');
if(isset($_POST['submit'])){
   $maxsize = 5242880; // 5MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "video/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 5MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
              $sql = mysqli_query($con,"insert into videos(name,location)values('".$name."','".$target_file."')");
              $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: video.php');
   exit;
} 
?>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
  .myDiv {
  border: 1px outset black;
  background-color: lightblue;
  text-align: center;
}
</style>
</head>
<body>
  <br>
  <h2 style="text-align: center">Upload Notice</h2>
  <div class="myDiv">
    <br>
    <form method="post" action="" enctype="multipart/form-data">
    <label>Video Title</label>
    <input type="text" name="title">
    <label>Choose Video File</label>
    <input type="file" name="file">
    <input type="submit" name="submit" value="upload">
    </form>
    <br>
  </div>
  <br>
     <div>
 
     <?php
     $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $name = $row['name'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='320px' ></video>     
          <br>
          <span>".$name."</span>
       </div>";
     }
     ?>
 
    </div>
</body>
</html>

