<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Upper County Dolphins - Results</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Le styles -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      
      <style>
         .hero-unit {
            color: #FFF;
            background: #000;
            background-repeat: no-repeat;
         }
         .hero-unit.left {
            text-align: left;
            background-position: right;
         }
         .hero-unit.right {
            text-align: right;
            background-position: left;
         }
         #week1 {
            background-image: url('img/results-01.jpg');
            background-size: 90% 100%;
         }
         #week2 {
            background-image: url('img/results-02.jpg');
            background-size: 90% 120%;
         }
         .text-box {
            width: 30%;
         }
      </style>
      
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
         <script src="../assets/js/html5shiv.js"></script>
    < ![endif]-->
   </head>

   <body>
      <!-- Wrap body contents in .wrap to push footer down to bottom of page -->
      <div id="wrap">
         <!-- Include navigation bar -->
         <?php require 'navbar.inc.php' ?>         
         <div id="push"></div>
         <!-- Wrap the rest of the page in another container to center all the content. -->
         <div class="container">
            <div class="marketing">
               <h2 class="featurette-heading">Meet Results <span class="muted">| A Meets</span></h2>
               <!-- START THE FEATURETTES -->
               <div class="featurette">
                  <div id="week1" class="hero-unit left">
                     <div class="text-box">
                        <h3>WEEK 1A: vs. Bethesda</h3>
                        <h4><font color="green">UC ???</font> - <font color="red">??? BE</font></h4>
                        <p>We're off to a great start! X out of Y best times for Upper County swimmers. Congratulations to John Doe for a new team record in 5000 fly with a time of 3 years. </p>
                        <p>
                           <button class="btn btn-large" type="button>">Program <i class="icon-download"></i></button>
                           <button class="btn btn-large btn-primary" type="button">Results <i class="icon-download icon-white"></i></button>
                        </p>
                     </div>
                  </div><!-- /.hero-unit -->
               </div>
               <hr class="featurette-divider">
               <div class="featurette">
                  <div id="week2" class="hero-unit right">
                     <h3>Week 2A: vs. Tilden Woods</h3>
                     <p>Some more text</p>
                     <p>
                        <button class="btn btn-large" type="button>">Program <i class="icon-download"></i></button>
                        <button class="btn btn-large btn-primary" type="button">Results <i class="icon-download icon-white"></i></button>
                     </p>
                     <div id="glowingLayout"></div>
                  </div><!-- /.hero-unit -->
               </div>
               <hr class="featurette-divider">
               <!-- /END THE FEATURETTES -->
            </div><!-- /.marketing -->
         </div><!-- /.container -->
         <div id="push"></div>
      </div><!-- /.wrap -->
      <?php require 'footer.inc.php' ?>
   </body>
</html>
