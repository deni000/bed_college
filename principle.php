<?php
require('top.inc.php');
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

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/backk.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Principle Desk</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<div style="padding-top: 100px;">
  <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="images/principle/princ.jpg" class="img-fluid" alt=""><br><br><br>
            <h3>Mrs. Charusmita Mahanta, M.A., B.Ed.</h3>
            <h4>Principal, Deomornoi B.Ed. College Darrang (Assam)</h4>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <p>
              Teachers play a vital role in shaping destiny of a great nation. Success or failure of any educational institution depends upon the quality, commitment and enthusiasm of the teaching profession. Successful teaching involves keeping pace with the latest trends and modern practices in education. The teacher should always be a learner. Only a burning candle could light another candle. Teacher education aims at helping the teacher in understanding the nature, abilities, aptitudes, developmental level, individual differences, emotion, instincts, sentiments, ambitions of the child and assist them in making better adjustments.<br>Teacher education includes the policies and procedure designed to equip teachers with the knowledge, attitudes, behaviors and skills they required to perform their tasks effectively in the school and classroom.<br>With that noble purpose, the Deomornoi B.Ed. College was established in 1993 by a young, dedicated, future thinkers, and lovers of education of this greater locality. College was affiliated to Gauhati University, Assam in 1996 and recognized by NCTE, New Delhi in 2009.<br>I hope the teacher trainees of our B.Ed. College will be the role model of the modern society. My best wishes to all the faculty members & teacher trainees for their great profession.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
</div>

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
<?php
require('footer.inc.php');
?>