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
      <div class="row-fluid">

        <!-- Main column -->
        <div class="span8">

          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Monday Practice:</strong>
            To celebrate our win against Bethesda, Monday's practice will be a play day!
          </div>
          <h2 class="featurette-heading">
            Announcements
            <span class="muted"> | Upcoming Events</span>
          </h2>
          <h3>Away Meet vs. Damascus <span class="label label-warning">NEW</span></h3>
          <p class="lead">
            Damascus Community Pool </br>
            Wednesday June 19, 2013</br>
            <strong>Warm-ups: </strong>Time TBA</br>
          <p>
            <a class="btn btn-primary" href="http://www.signupgenius.com/go/10C0D4DABA62B0-bmeetswimmer6/4929" target="_blank">Event Sign-ups <i class="icon-edit icon-white"></i></a>
            <a class="btn btn-info" href="http://goo.gl/maps/NwKFU" target="_blank">Pool Directions <i class="icon-map-marker icon-white"></i></a>
          <hr class="featurette-divider">
          <h3>Home Meet vs. Bethesda</h3>
          <p class="lead">
            Upper County Outdoor Pool</br>
            Saturday June 15, 2013</br>
            <strong>Final Score: </strong>UC 462 - 329 BE
            <p>
              <a class="btn btn-primary" href="pdf/be-program.pdf" target="_blank">Program <i class="icon-download icon-white"></i></a>
              <a class="btn btn-primary" href="pdf/be-results.pdf" target="_blank">Results <i class="icon-download icon-white"></i></a>
        </div><!-- /.span8 -->

        <!-- Sidebar -->
        <div class="span4 sidebar">
          <!-- TODO (yang): add alternate media. separate styling from scripting. -->
          <img class="img" src="img/dolphin-logo.jpg" width="150px">
            <h3>Registration is open!</h3>
              <p>Upper County Dolphins is a Division A swim team in the Montgomery County Swim League (MCSL). We are #2 in the top division! Register online. Our course number is 351003.</p>
              <p><a class="btn" href="http://www6.montgomerycountymd.gov/rectmpl.asp?url=/content/rec/index.asp" target="_blank">Register Online &raquo;</a></p>
              <hr>
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
