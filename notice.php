<?php
require('top.inc.php');
require('connection.inc.php');
$sql = "SELECT * FROM notice ORDER BY id DESC";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<style>
.myDiv {
  border: 1px outset #1a1a37;
}
.responsive {
  width: 100%;
  height: auto;
}
</style>
<section class="page-title-section overlay" data-background="images/backgrounds/backk.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Notice</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">New Notifications :</h2><br>
        <div class="myDiv">
        <?php
            while($rows=$result->fetch_assoc())
            {
             ?>
             <li class="text-danger"><img src="images/new-icon-gif-2.jpg" style="height:33px;width:33px;"> 
           
            <?php echo $rows['title'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $rows['date'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="dbc_admin/uploaded_notice/<?php echo $rows['file'];?>" download>Download</a>

            <br><i class="fa fa-calendar text-dark" aria-hidden="true"></i>&nbsp;&nbsp;<span class="text-primary"></span></li><br>

            <?php
                }
             ?>
      </div>
     </div>
    </div>
  </div>
</section>
<?php
require('footer.inc.php');
?>

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