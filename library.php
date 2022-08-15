<?php
require'top.inc.php';
?>
<style>
.myDiv {
  border: 1px outset #1a1a37;
  background-color: lightblue;
  text-align: center;

}
.responsive {
  width: 100%;
  height: auto;
}
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<section class="page-title-section overlay" data-background="images/backgrounds/backk.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Library</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">LIBRARY:</h2><br>
        <div class="myDiv">
          <h4>NUMBER OF BOOKS IN THE LIBRARY FOR THE CURRENT SESSION 2022</h4>
          <table align="center">
            <tr>
              <td>Total Number of books :</td>
              <td>4664</td>
            </tr>
            <tr>
              <td>Number of Educational Journals :</td>
              <td>07</td>
            </tr>
            <tr>
              <td>Number of Encyclopedia :</td><br>
              <td>18</td>
            </tr>
            <tr>
              <td>Number of books in the reference section :</td>
              <td>3370</td>
            </tr>
          </table>
          <br>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="images/library/lb.jpg">
              <img src="images/library/lb.jpg" width="600" height="400">
            </a>
            <div class="desc">Image 1</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="images/library/lb1.jpg">
              <img src="images/library/lb1.jpg" width="600" height="400">
            </a>
            <div class="desc">Image 2</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="images/library/lb2.jpg">
              <img src="images/library/lb2.jpg" width="600" height="400">
            </a>
            <div class="desc">Image 3</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="images/library/lb3.jpg">
              <img src="images/library/lb3.jpg" width="600" height="400">
            </a>
            <div class="desc">Image 4</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="images/library/lb4.jpg">
              <img src="images/library/lb4.jpg" width="600" height="400">
            </a>
            <div class="desc">Image 5</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="images/library/lb5.jpg">
              <img src="images/library/lb5.jpg" width="600" height="400">
            </a>
            <div class="desc">Image 6</div>
          </div>
        </div>
       </div>
      </div>
    </div>
</section>
<?php
require'footer.inc.php';
?>