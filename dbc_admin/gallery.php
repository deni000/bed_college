<?php
include('header.php');
?>
<html>
<head>
  <title>Admin Dashboard</title>
<style>
* {
  margin:  0;
  padding:  0;
  font-family:  sans-serif;
}
body{
  background: #ecf4fb;
}
.myDiv {
  border: 1px outset black;
  background-color: lightgreen;
  text-align: center;
}
.img-gallery{
  width:  80%;
  margin:  100px auto 50px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  grid-gap: 30px;
}
.img-gallery img{
  width: 100%;
  cursor: pointer;
  transition:  0.4s;
}
.img-gallery img:hover{
  transform: scale(0.8) rotate(-15deg);
  border-radius: 20px;
  box-shadow: 0 32px 700px rgba(68,77,136, 0.2);
}

</style>
</head>
<body>
  <br>
  <h2 style="text-align: center">Upload Gallery Image</h2>
  <div class="myDiv">
    <br>
    <form action="gallery_upload.php" method="POST" enctype="multipart/form-data">
      <label>Select Image File</label>
      <input type="file" name="image">
      <button type="submit" name="submit">UPLOAD</button>
    </form>
    <br>
  </div>
  <br>
<section>
   <h2>Gallery</h2>
  <div class="img-gallery">
 
    <?php   
      require_once 'database_connection.php'; 
      $result = $con->query("SELECT image FROM images ORDER BY id DESC"); 
      ?>
      <?php if($result->num_rows > 0){ ?>  
              <?php while($row = $result->fetch_assoc()){ ?> 
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
              <?php } ?> 
      <?php }else{ ?> 
          <p class="status error">Image(s) not found...</p> 
      <?php } ?>
</div>
</section>
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
</body>
</html>