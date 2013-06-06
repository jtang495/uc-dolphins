<!DOCTYPE html>
<?php require 'includes/head.inc.php' ?>
<title>Meet Results - UCD</title>
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
<div id="wrap">
  <!-- Include navigation bar -->
  <?php require 'includes/navbar.inc.php' ?>         
  <div id="push"></div>
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container">
    <div class="marketing">
      <h2 class="featurette-heading">Meet Results <span class="muted">| A Meets</span></h2>
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
      </div><!-- /.featurettes -->
    </div><!-- /.marketing -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'includes/footer.inc.php' ?>
