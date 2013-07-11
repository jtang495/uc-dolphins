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
        <img src="img/slide-01.jpg" alt="carousel-photo">
      </div><!-- /.item -->
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
        <div class="span4">
          <h2 class="featurette-heading">Announcements</h2>
    		  <hr class="featurette-divider">
          <h3>A Relay Carnival</h3>
		      <p class="lead">
            Sunday, July 7, 2013 <br>
            <strong>Final Score:</strong>
            <font color="green">UC 178</font> (2nd place)
          <p>
            <a class="btn btn-primary" href="pdf/relay-a-results.pdf" target="_blank">Results <i class="icon-download icon-white"></i></a>
          <hr class="featurette-divider">
          <h3>A Meet vs. Stonegate</h3>
			    <p class="lead">
            Saturday, July 6, 2013<br>
            <strong>Final Score: </strong><font color="green">UC 421.5</font> - <font color="red">370.5 SG</font>
          <p>  
            <a class="btn" href="pdf/sg-program.pdf" target="_blank">Program <i class="icon-download"></i></a>
            <a class="btn btn-primary" href="pdf/sg-results.pdf" target="_blank">Results <i class="icon-download icon-white"></i></a>
		      <hr class="featurette-divider">
          <h3>B Meet vs. Mill Creeke Town</h3>
		      <p class="lead">  
            Wednesday, July 3, 2013<br>
            <strong>Final Score: </strong><font color="red">UC 380</font> - <font color="green">455 MCT</font>
		      <p>
            <a class="btn btn-primary" href="pdf/mct-results.pdf" target="_blank">Results <i class="icon-download icon-white"></i></a>
          <hr class="featurette-divider">
        </div><!-- /.span4 -->

        <div class="span5">
          <h2 class="featurette-heading">Upcoming Events</h2>
          <hr class="featurette-divider">
          <h3>Pool Party <span class="label label-warning">NEW</span></h3>
		      <p class="lead">  
            <strong>Where:</strong> Upper County Pool<br>
            <strong>When:</strong> Thursday, July 11, 2013, 7:00-8:00 pm<br>
            Free Freeze Pops will be available! <br>
          <p>
          <hr class="featurette-divider">
          <h3>Secret Swimmer Reveal & Outdoor Movie night <span class="label label-warning">NEW</span></h3>
		      <p class="lead">  
            <strong>Where:</strong> Upper County Pool<br>
            <strong>When:</strong> Sunday, July 14, 2013, 7:00-9:00 pm<br>
            <strong>Movie:</strong> Lion King<br>
            More info to follow.
          <p>
          <hr class="featurette-divider">
          <h3>B Relay Carnival</h3>
          <p class="lead">
            Sunday, July 14, 2013<br>
            <strong>Where:</strong> Upper County Pool<br>
        </div><!-- /.span4 -->

        <!-- Sidebar -->
        <div class="span3 sidebar">
          <!-- TODO (yang): add alternate media. separate styling from scripting. -->
              <img class="img" src="img/calendar.png" width="150px">
              <h3>Stay up to date!</h3>
              <p>View the practice schedule, meets, team gatherings, and other important MCSL dates.</p>
              <p><a class="btn" href="//www.google.com/calendar/embed?src=l1sbfdasf9s3jnmd87mndhhltg%40group.calendar.google.com&ctz=America/New_York
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
