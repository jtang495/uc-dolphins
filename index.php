<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Upper County Dolphins - Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
         <script src="../assets/js/html5shiv.js"></script>
    < ![endif]-->
   </head>

   <body>
      <!-- Wrap body contents in .wrap to push footer down to bottom of page -->
      <div id="wrap">
         <?php require 'navbar.inc.php' ?>

         <!-- Carousel
         ================================================== -->
         <div id="main-carousel" class="carousel slide">
            <div class="carousel-inner">
               <div class="item active">
                  <img src="img/slide-01.jpg" alt="">
                  <div class="container">
                     <div class="carousel-caption">
                        <h1>Registration is Open</h1>
	                     <p class="lead">Upper County Dolphins is a Division A swim team. Come join the fun! We are #2 in the top division!</p>
                        <a class="btn btn-large btn-primary" href="#">Register online</a>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/slide-02.jpg" alt="">
                  <div class="container">
                     <div class="carousel-caption">
                        <h1>2013 Spirit Wear has Arrived!</h1>
                        <p class="lead">This year's team suit is the Nike Foil Skin. Order yours now.</p>
                        <a class="btn btn-large btn-primary" href="#">Check it out</a>
                     </div>
                  </div>
               </div>
            </div>
            <a class="left carousel-control" href="#main-carousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#main-carousel" data-slide="next">&rsaquo;</a>
         </div><!-- /.carousel -->

         <!-- SOCIAL BAR
         ================================================ -->
         <div class="social">
            <div class="container">
               Random "follow us on facebook, twitter, google groups stuff" here?
            </div>
         </div>

         <!-- Marketing messaging and featurettes
         ================================================== -->
         <!-- Wrap the rest of the page in another container to center all the content. -->

         <div class="container">
            <div class="marketing">
               <!-- Three columns of text below the carousel -->
               <div class="row-fluid">
                  <div class="span8">
                     <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>05/27 6:59 pm:</strong> Woohoo! First deployment successful. But really, this space is reserved for emergency announcements ;)
                     </div>
                     <h2 class="featurette-heading">What to put here? <span class="muted">Beats me...</span></h2>
                  </div><!-- /.span8 -->
                  <div class="span4">
                     <img class="img" src="img/dolphin-logo.jpg" width="150px">
	                  <h3>Registration is open!</h3>
	                  <p>Upper County Dolphins is a Division A swim team in the Montgomery County Swim League (MCSL). We are #2 in the top division! Register online. Our course number is 351003.</p>
	                  <p><a class="btn" href="#">Register Online &raquo;</a></p>
                     <hr>
                     <img class="img" src="img/calendar.png" width="150px">
	                  <h3>Stay up to date!</h3>
	                  <p>View the practice schedule, meets, team gatherings, and other important MCSL dates.</p>
	                  <p><a class="btn" href="#">View Calendar &raquo;</a></p>
                     <hr>
                     <img class="img-circle" src="img/life-jacket.jpg" width="150px">
                     <h3>New to summer league?</h3>
                     <p>Click below to read through the survival guide!</p>
	                  <p><a class="btn" href="#">Swim Team Survival Guide &raquo;</a></p>
                  </div><!-- /.span4 -->
               </div><!-- /.row -->
            </div><!-- /.marketing -->
         </div><!-- /.container -->
         <div id="push"></div>
      </div><!-- /.wrap -->
      <?php require 'footer.inc.php' ?>
      <script>
         $('#main-carousel').carousel({
            interval: 5000
         })
      </script>
   </body>
</html>
