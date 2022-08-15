<?php
include('header.php');
if(isset($_POST["submit"]))
{
  $title=$_POST["title"];
  $file=$_FILES["file"]["name"];
  $tmp_name=$_FILES["file"]["tmp_name"];
  $path="downloads/".$file;
  $file1=explode(".",$file);
  $ext=$file1[1];
  $allowed=array("xlsx","docx","jpg","png","gif","pdf","wmv","pdf","zip");
  if(in_array($ext,$allowed))
  {
 move_uploaded_file($tmp_name,$path);
 $sql = mysqli_query($con,"insert into download(title,file)values('$title','$file')");
  }
}
?>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
  .myDiv {
  border: 1px outset black;
  background-color: cyan;
  text-align: center;
}
</style>
</head>
<body>
  <br>
  <h2 style="text-align: center">Upload Download Section File</h2>
  <div class="myDiv">
    <br>
    <form enctype="multipart/form-data" method="post">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="file" name="file">
    <input type="submit" name="submit" value="upload">
    </form>
    <br>
  </div>
</body>
</html>