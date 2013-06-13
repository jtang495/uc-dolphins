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
        <div id="week1" class="hero-unit left visible-desktop">
          <div class="text-box">
            <h3>WEEK 1A: vs. Bethesda</h3>
            <h4>Monday, June 15 2013</h4>
            <!-- Score
            <h4><font color="green">UC ???</font> - <font color="red">??? BE</font></h4>
            -->
            <p>
              Program and meet results will be posted when available.
            <p>
              <button class="btn btn-large" type="button>">Program <i class="icon-download"></i></button>
              <button class="btn btn-large btn-primary" type="button">Results <i class="icon-download icon-white"></i></button>
            </p>
          </div>
        </div><!-- /.hero-unit -->
      </div><!-- /.featurettes -->
    </div><!-- /.marketing -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'includes/footer.inc.php' ?>
