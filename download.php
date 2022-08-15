<?php
require('top.inc.php');
require('connection.inc.php');
$sql = "SELECT * FROM download ORDER BY id ASC";
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
          <li class="list-inline-item text-white h3 font-secondary nasted">DOWNLOAD SECTION</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Download Section :</h2><br>
        <div class="myDiv"><br>
        <?php
            while($rows=$result->fetch_assoc())
            {
             ?>
            <li style="color: blue"> 
            <?php echo $rows['title'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="dbc_admin/downloads/<?php echo $rows['file'];?>" view>View</a>

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




<!-- 

         <a href="/dbc/downloads/bp1.pdf">  BUILDING PLAN PAGE-1   </a><br>
         <a href="/dbc/downloads/bp2.pdf">  BUILDING PLAN PAGE-2   </a><br>
        </div>
       </div>
      </div>
    </div>
</section>
-->