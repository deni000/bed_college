<?php
require('top.inc.php');
require('connection.inc.php');
$sql = "SELECT * FROM notice ORDER BY id DESC";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission</h1>
            <a href="#" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">One of the Best Bed. College in Assam</h1>
            <a href="#" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<div>
  <br>
  <br>
   &nbsp;
  <section id="slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-12">
                    <div class="py-2 px-3 about">
                        <h2 class="standfirst__title" style="font-size:1.9rem; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;text-decoration: underline";>
                            Principal's Desk</h2>
                            <br>
                        <p class="text-justify" style="text-indent:50px;">
                            Teachers play a vital role in shaping destiny of a great nation. Success or failure of any educational institution depends upon the quality, commitment and enthusiasm of the teaching profession. Successful teaching involves keeping pace with the latest trends and modern practices in education. The teacher should always be a learner. Only a burning candle could light another candle. Teacher education aims at helping the teacher in understanding the nature, abilities, aptitudes, developmental level, individual differences, emotion, instincts, sentiments, ambitions of the child and assist them in making better adjustments.
                            Teacher education includes the policies and procedure designed to equip teachers with the knowledge, attitudes, behaviors and skills they required to perform their tasks effectively in the school and classroom....
                            <a href="principle.php" style="text-decoration:none; color:blue">Read
                                More</a>
                        </p>
                    </div>
                </div>
                <div style="background-color:powderblue;"class="col-lg-5 col-md-12 border-right">
                    <h5 style="font-size:1.5rem; height:45px; padding-left:18px;padding-top:5px; font-family:'Times New Roman', Times, serif;background: SlateBlue; color:honeydew;text-align:center" class="border-bottom"><b>News &amp; Notice</b> &nbsp;&nbsp;&nbsp;
                      <sup style="font-size:13px;color:aliceblue;">| <a href="notice.php" style="font-size:13px; color:aliceblue">View All</a></sup>
                    </h5>
                <marquee direction="up" scrollamount="3" height="300px" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul>
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
                </marquee>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- about us -->
<br>
<br>
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About The Deomornoi</h2>
        <h4>ETYMOLOGICAL MEANING OF DEOMORNOI :<h4><br>
<p>The snowy Himalayas on the North, the Great Mahanada Brahmaputra on the South, Panchnoi and Bornodi, the two tributaries of Brahmaputra, on East and West respectively are the boundaries of our District Darrang (Assam) a place full of natural beauty for which the saints like Biswamitra came here for devotional prayer. The District is rich in cultural heritage and full of historical backgrounds, monuments and sculptures, temples and Devalayas. Having variety in languages, different tribes with different cultures and traditions are living here with unity in diversity. Within this District, the historic place DEOMORNOI is situated at the mid place. The pre-historic name of this place was Byaghrapinda.</p>

<p>The Dwigvãshã, a river emerging from the snowy Himalayas was flowing through the Byãghrapindã and joined the Brahmaputra in south. On the bank of this river Dwigvãshã, Byãghrapindã was the 'Ashrama' of Saint Sri Sri Sialagosaidev. Once the wife of Gosaidev, when came to the river for water, was ill-treated by the traders sitting on his boat. Being informed by his wife. Gosaidev became angry with and cursed both river and the traders to go hell. From that time the river flow had stopped. As Gosaidev destroyed the river, the river was named as 'dev-destroyed-river.' in Assamese 'Dev-Mon-Noi'- and now</p>
      <a href="about.php" class="btn btn-outline-primary">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-1.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->
<!-- success story -->
<div style="text-align:center;"><h2 class="section-title">Videos</h2></div>
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <?php
    require_once 'db-conn.php';
     $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $name = $row['name'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='dbc_admin/".$location."' controls width='320px' height='320px' ></video>     
          <br>
          <span>".$name."</span>
       </div>";
     }
     ?>
    </div>
  </div>
</section>
<!-- /success story -->
<?php
require('footer.inc.php');
?>