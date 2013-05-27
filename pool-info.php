<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Upper County Dolphins - Pool Information</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
         <!-- Include navigation bar -->
         <?php require 'navbar.inc.php' ?>         
         <div id="push"></div>
         <!-- Wrap the rest of the page in another container to center all the content. -->
         <div class="container">
            <div class="marketing">
               <!-- START THE FEATURETTES -->
               <div class="featurette">
                  <div class="row-fluid">
                     <div class="span8">
                        <img src="img/pool.jpg" width="80%">
                     </div><!-- /.span8 -->
                     <div class="span4">
                        <p>Upper County Outdoor Pool</p>
                        <p>8211 Emory Grove Rd.<br/>
                        Gaithersburg, MD 20878<br/>
                        (301) 840-2446</p>
                        <p><button class="btn btn-small btn-primary" type="button"><i class="icon-map-marker icon-white"></i> Get Directions</button></p>
                        <h3><span class="muted">Public Hours</span></h3>
                        <h4>Pre-season</h4>
                        <p>Sat-Sun: 12:00-6:00 pm</p>
                        <h4>Summer Season</h4>
                        <p>Mon-Thur: 1:00-8:00 pm</p>
                        <p>Sat-Sun: 12:00-8:00 pm</p>
                        <h4>Post-season</h4>
                        <p>Mon-Thur: 1:00-7:00 pm</p>
                        <p>Sat-Sun: 12:00-6:00 pm</p>
                     </div>
                  </div><!-- /.row-fluid -->
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
