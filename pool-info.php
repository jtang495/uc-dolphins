<!DOCTYPE html>
<?php require 'head.inc.php' ?>
<style>
  #sidebar {
    padding: 10px;
    border: 2px solid #ddd;
    background-color: #f5f5f5;
  }
</style>
<title>Pool Information - UCD</title>
<div id="wrap">
  <!-- Include navigation bar -->
  <?php require 'navbar.inc.php' ?>
  <div id="push"></div>
  <div class="container">
    <div class="marketing">
      <div class="featurette">
        <div class="row-fluid">
            <div class="span8">
              <img class="img-rounded" src="img/pool.jpg" >
            </div><!-- /.span8 -->
            <div id="sidebar" class="span4">
              <p class="lead">Upper County Outdoor Pool
              <p class="lead">8211 Emory Grove Rd.<br/>
              Gaithersburg, MD 20878<br/>
              (301) 840-2446
              <!-- TODO (yang): use google short url -->
              <p><a class="btn btn-small btn-primary" href="https://maps.google.com/maps?daddr=8211+Emory+Grove+Rd,+Gaithersburg+MD,+20878" target="_blank"><i class="icon-map-marker icon-white"></i> Get Directions</a>
              <h3>
                <span class="muted">Public Hours</span>
              </h3>
              <h4>Pre-season</h4>
              <p class="lead">Sat-Sun: 12:00-6:00 pm
              <h4>Summer Season</h4>
              <p class="lead">
                Mon-Thur: 1:00-8:00 pm</br>
                Sat-Sun: 12:00-8:00 pm
              <h4>Post-season</h4>
              <p class="lead">
                Mon-Thur: 1:00-7:00 pm</br>
                Sat-Sun: 12:00-6:00 pm
            </div>
        </div><!-- /.row-fluid -->
      </div><!-- /.featurette -->
    </div><!-- /.marketing -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'footer.inc.php' ?>
