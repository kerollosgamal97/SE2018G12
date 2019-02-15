<?php include_once('./components/head.php');
include_once('./controllers/common.php');

 ?>
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <div class="carousel-item active" style="background-color:	#00FA9A;" >
            <div class="container">
              <div class="carousel-caption text-left" >
                <h1>Join Our Community</h1>
                <p>By joining our community you will be able to search , filter , and buy products</p>
                <p><a class="btn btn-lg btn-primary reg" href="signup.php" role="button" >Sign Up Today</a></p>
              </div>
            </div>
          </div>


          <div class="carousel-item" 	style="background-color:#00CED1;">
            <div class="container">
              <div class="carousel-caption">
                <h1>Enter As Guest</h1>
                <p>Entering as a guest will make you able to see latest offers ,and find shops and designers.</p>
                <p><a class="btn btn-lg btn-primary guest" href="guestpage.php" role="button" id="2">Join</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item"  style="background-color:rgb(223, 177, 220);">

            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Browse products</h1>
                <p>you can browse the producters here before joining our site</p>
                <p><a class="btn btn-lg btn-primary gallery" href="show.php" role="button" id="3">Browse</a></p>
              </div>
            </div>
          </div>


        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/customers.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Customers</h2>
            <p>Customers can search for different designers and shop owners. They can search for products using different filters.They can also review designers and view others' views.  </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/shop.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Shop Owners</h2>
            <p>Shop owners can present their products, develop an idea of customers' needs through the reviews and view other shops' products and pricing.</p>
            <p><a class="btn btn-secondary" href="search.php?name=1&gov=1&type=Shop Owner" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/designers.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Designers</h2>
            <p>Fashion designers can show their work by uploading pictures, contact shop owners for business and fill the markets' needs through customers' feedback . </p>
            <p><a class="btn btn-secondary" href="search.php?name=1&gov=1&type=Designer" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">You can find enormous amount of goods<span class="text-muted"></span></h2>
            <p class="lead">you can find enormous amount of goods as ou site depends on shop owners and designers to submit their work so our database is in continious growth.</p>
          </div>
          <div class="col-md-5">
            <img  src="images/all.jpg" alt="Generic placeholder image" width="400" height="400">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Searching with filters<span class="text-muted"></span></h2>
            <p class="lead">Searching with filters make you able to reach your destination in fastest and easiest way.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img  src="images/filters.jpg" alt="Generic placeholder image" width="400" height="400">
          </div>
        </div>

        <hr class="featurette-divider">
      </div>
      <!-- FOOTER -->
    <?php include_once('./components/maintail.php') ?>
    <script type="text/javascript">
    	$(document).ready(function() {
$('.signup').click(function(){
  	window.location.href = "signup.php?id="+$(this).attr('id');
});
$('.customer').click(function(){
  	window.location.href = "customer.php?id="+$(this).attr('id');
});
$('.gallery').click(function(){
  	window.location.href = "gallery.php?id="+$(this).attr('id');
});
  });
      </script>
  </body>
</html>
