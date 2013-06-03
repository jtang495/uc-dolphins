<!DOCTYPE html>
<?php require 'head.inc.php' ?>
<link href="css/carousel.css" rel="stylesheet">
<title>Home - UCD</title>
<div id="wrap">
  <?php require 'navbar.inc.php' ?>
  <!-- Carousel -->
  <div id="main-carousel" class="carousel slide">
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
    </div><!-- /.item -->
    <a class="left carousel-control" href="#main-carousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#main-carousel" data-slide="next">&rsaquo;</a>
  </div><!-- /.carousel -->

  <!-- Social bar -->
  <div id="social">
    <div class="container">
      Random "follow us on facebook, twitter, google groups stuff" here?
    </div>
  </div><!-- /#social -->

  <div class="container">
    <div class="marketing">
      <div class="row-fluid">

        <!-- Main column -->
        <div class="span8">


          <!-- Uncomment out to make announcement
          <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>05/27 6:59 pm:</strong>
            Woohoo! First deployment successful. But really, this space is reserved for emergency announcements ;)
          </div>
          -->

          <h2 class="featurette-heading">
            Announcements
            <span class="muted"> | Upcoming Events</span>
          </h2>
          <p class="lead">
            <h3>Time Trials - June 08 <div class="label label-warning">NEW</div></h3>
          <p class="lead">We are ready to start our season!
          <p class="lead">
            Upper County Outdoor Pool</br>
            Swimmers should arrive by 6:50 am.</br>
            <strong>Warm-ups:</strong> 7:00 am <strong>Meet start:</strong> 7:30 am</br>
          <p class="lead">
            We stil need volunteers!
          <hr class="featurette-divider">
            <h3>Pasta Pot Luck & Pep Rally - June 14 <div class="label label-warning">NEW</div></h3>
          <p class="lead">
            Upper County Outdoor Pool</br>
            Starting at ??:?? pm. We are taking the team photo!
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
<?php require 'footer.inc.php' ?>
<script>
   $('#main-carousel').carousel({
      interval: 5000
   })
</script>
