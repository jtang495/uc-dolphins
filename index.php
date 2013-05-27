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

      <!-- Start WOWSlider.com HEAD section -->
      <link rel="stylesheet" type="text/css" href="slider-js/style.css" />
      <script type="text/javascript" src="slider-js/jquery.js"></script>
      <!-- End WOWSlider.com HEAD section -->
      
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
         <script src="../assets/js/html5shiv.js"></script>
    < ![endif]-->
   </head>

   <body>
      <!-- Wrap body contents in .wrap to push footer down to bottom of page -->
      <div id="wrap">
         <?php require 'navbar.inc.php' ?>

	      <!-- Start WOWSlider.com BODY section -->
	      <div id="wowslider-container1">
            <div class="ws_images">
               <ul>
                  <li><img src="slider-img/slide-01.jpg" alt="Title 1" title="Title 1" id="wows1_0"/>Description 1</li>
                  <li><img src="slider-img/slide-02.jpg" alt="Slide 2" title="Slide 2" id="wows1_1"/>Description 2</li>
               </ul>
            </div>
            <div class="ws_bullets">
               <div>
                  <a href="#" title="Title 1"><img src="slider-img/tooltips/slide-01.jpg" alt="Title 1"/>1</a>
                  <a href="#" title="Slide 2"><img src="slider-img/tooltips/slide-02.jpg" alt="Slide 2"/>2</a>
               </div>
            </div>
            <span class="wsl"><a href="http://wowslider.com">Slideshow Joomla</a> by WOWSlider.com v3.8</span>
	         <div class="ws_shadow"></div>
	      </div>
	      <script type="text/javascript" src="slider-js/wowslider.js"></script>
	      <script type="text/javascript" src="slider-js/script.js"></script>
	      <!-- End WOWSlider.com BODY section -->

         <!-- SOCIAL BAR
         ================================================ -->
         <div class="social">
            <div class="container">
            </div>
         </div>

         <!-- Marketing messaging and featurettes
         ================================================== -->
         <!-- Wrap the rest of the page in another container to center all the content. -->

         <div class="container">
            <div class="marketing">
               <!-- Three columns of text below the carousel -->
               <div class="row-fluid">
	               <div class="span4">
                     <img class="img" src="img/dolphin-logo.jpg" width="150px">
	                  <h2>Registration is Open!</h2>
	                  <p>Upper County Dolphins is a Division A swim team in the Montgomery County Swim League (MCSL). We are #2 in the top division! Register online. Our course number is 351003.</p>
	                  <p><a class="btn" href="#">Register Online &raquo;</a></p>
                  </div><!-- /.span4 -->
                  <div class="span4">
                     <img class="img-circle" src="img/life-jacket.jpg" width="150px">
                     <h2>New to Summer League?</h2>
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
         !function ($) {
            $(function(){
            // carousel demo
            $('#myCarousel').carousel()
            })
         }(window.jQuery)
      </script>
   </body>
</html>
