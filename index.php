<!DOCTYPE html>
<?php require 'includes/head.inc.php' ?>
<link href="css/carousel.css" rel="stylesheet">
<style>
  #fb-button {
    height: 25px;
  }
</style>
<title>Home - UCD</title>
<div id="wrap">
  <?php require 'includes/navbar.inc.php' ?>
  <!-- Carousel -->
  <div id="main-carousel" class="carousel slide visible-desktop">
    <div class="carousel-inner">
      <div class="item active">
        <!-- TODO (yang): add alternate media -->
        <img src="img/slide-01.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Registration is Open</h1>
            <p class="lead">
              Upper County Dolphins is a Division A swim team. Come join the fun! We are #2 in the top division! Our course number is 351003.
            </p>
            <a class="btn btn-large btn-primary" href="https://recweb.montgomerycountymd.gov/Start/Start.asp" target="_blank">Register online</a>
          </div>
        </div>
      </div><!-- /.item -->
      <div class="item">
        <!-- TODO (yang): add alternate media -->
        <img src="img/slide-02.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>2013 Spirit Wear has Arrived!</h1>
            <p class="lead">
              This year's team suit is the Nike Foil Skin. Order yours now.
            <p>
              <a class="btn btn-large btn-primary" href="team-suits.php">Team Suit</a>
              <a class="btn btn-large" href="dolphin-shop.php">Spirit Wear</a>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#main-carousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#main-carousel" data-slide="next">&rsaquo;</a>
  </div><!-- /.carousel -->


  <div id="social">
    <div class="container">
      <a href="https://twitter.com/UCDolphins" class="twitter-follow-button" data-show-count="true" data-size="large">Follow @UCDolphins</a>
    </div>
  </div>

  <div class="container">
    <div class="marketing">
      <!--      
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Upper County beats Tilden Woods for a second straight year! Final Score: 438 - 353. </strong>
        Monday's practice will be a play day!
      </div>
      -->
      <div class="row-fluid">

        <!-- Main column -->
        <div class="span4">
          <h2 class="featurette-heading">Announcements</h2>
          <hr class="featurette-divider">
          <h3>B Meet vs. Olney Mill <span class="label label-warning">NEW</span></h3>
          <p class="lead">  
            Wednesday, June 26, 2013<br>
            <strong>Final Score: </strong> UC 433.5 - 273.5 OM
          <p>
            <a class="btn btn-primary" href="pdf/om-results.pdf" target="_blank">Results <i class="icon-download icon-white"></i></a>
          <hr class="featurette-divider">
          <h3>A Meet vs. Tilden Woods</h3>
          <p class="lead">
            Saturday June 22, 2013<br>
            <strong>Final Score: </strong>UC 438 - 353 TW
          <p>
            <a class="btn btn-primary" href="pdf/tw-results.pdf" target="_blank">Results <i class="icon-download icon-white"></i></a>
        </div><!-- /.span4 -->
        
        <div class="span5">
          <h2 class="featurette-heading">Upcoming Events</h2>
          <hr class="featurette-divider">
          <h3>Pep Rally & International Pot Luck</h3>
          <p class="lead">
            Friday, June 28 from 6:00-8:00 pm<br>
            <strong>Where: </strong>Upper County Outdoor Pool
          <p class="lead">
            Secret swimmers will be handed out at the potluck! Each family should bring a main dish that is one of your family's favorites. The servings should be for approximately 8-10 people.
          <p class="lead">Please prepare <strong>two identical index cards</strong> which will be put along side your dishes:
            <ul>
              <li class="lead">Name of food, country/region, dominant taste (sweet, sour, spicy, etc.)
              <li class="lead">Major ingredients
            </ul>
          <p class="lead">
            <strong>In addition:</strong>
            <ul>
              <li class="lead"><strong>Last name A-M:</strong> Bring a dessert to share
              <li class="lead"><strong>Last name N-Z:</strong> Bring a side dish (salad, fruit, bread, etc) to share
              <li class="lead"><strong>Bring your own drinks!</strong>
            </ul>
          <hr class="featurette-divider">
          <h3>A Meet vs. Darnestown</h3>
          <p class="lead">
            Saturday, June 29<br>
            <strong>Where: </strong>Upper County Outdoor Pool<br>
            <strong>Warm-ups: </strong>7:30 am<br>
            <strong>Meet starts: </strong>9:00 am
        </div><!-- /.span4 -->

        <!-- Sidebar -->
        <div class="span3 sidebar">
          <!-- TODO (yang): add alternate media. separate styling from scripting. -->
              <img class="img" src="img/calendar.png" width="150px">
              <h3>Stay up to date!</h3>
              <p>View the practice schedule, meets, team gatherings, and other important MCSL dates.</p>
              <p><a class="btn" href="https://www.google.com/calendar/embed?src=l1sbfdasf9s3jnmd87mndhhltg%40group.calendar.google.com&ctz=America/New_York
" target="_blank">View Calendar &raquo;</a></p>
              <hr>
              <!-- TODO (yang): add alternate media. separate styling from scripting. -->
              <img class="img-circle" src="img/life-jacket.jpg" width="150px">
              <h3>New to summer league?</h3>
              <p>Click below to read through the survival guide!</p>
              <p><a class="btn" href="pdf/survivial-guide.pdf" type="application/octet-stream">Swim Team Survival Guide &raquo;</a></p>
          </div><!-- /.span4 -->
        </div><!-- /.row -->
      </div><!-- /.marketing -->
    </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'includes/footer.inc.php' ?>
<script>
   $('#main-carousel').carousel({
      interval: 5000
   })
</script>
<script>
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
