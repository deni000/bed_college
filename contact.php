<?php
require'top.inc.php';
?>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/backk.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="contact.php" method="POST">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" required>
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email" required>
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject" required>
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" required></textarea>
          <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Deomornoi B.Ed. College<br>P.O. Deomornoi-784147 <br>Via & P.S. - Mangaldai<br>Dist. Darrang, Assam, India<br>Cell No. 9435386418/98543 48480<br>Code No. APE 00530<br>

 </p>
        <a href="tel:+91 03713 23646" class="text-color h5 d-block">Phone +91 03713 23646</a>
        <a href="mailto:principal.tt@gmail.com" class="mb-5 text-color h5 d-block">E-Mail Address : principal.tt@gmail.com</a>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id="map_canvas" data-latitude="26.4984860788231" data-longitude="91.92182892576004"></div>
</section>
<!-- /gmap -->

<?php
require'footer.inc.php';
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