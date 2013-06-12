<!DOCTYPE html>
<?php require 'includes/head.inc.php' ?>
<link href="css/docs.css" rel="stylesheet">
<title>Upper County - Documentation</title>
<div id="wrap">
  <!-- Include navigation bar -->
  <?php require 'includes/navbar.inc.php' ?>
  <div id="push"></div>
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container">
    <div class="row">
      <div class="span3 docs-sidebar">
        <ul class="nav nav-list docs-sidenav">
          <li><a href="#overview"><i class="icon-chevron-right"></i>Overview</a>
          <li><a href="#hosting"><i class="icon-chevron-right"></i>Hosting</a>
          <li><a href="#install"><i class="icon-chevron-right"></i>Installing Git and Heroku</a>
          <li><a href="#workflow"><i class="icon-chevron-right"></i>Workflow</a>
        </ul>
      </div><!-- /.span3 -->
      <div class="span9">
        <section id="overview">
          <div class="page-header">
            <h1>Overview</h1>
          </div>
        </section>
        <section id="hosting">
          <div class="page-header">
            <h1>Hosting</h1>
          </div>
          <h3>Heroku</h3>
        </section>
        <section id="install">
          <div class="page-header">
            <h1>Installing Git and Heroku</h1>
          </div>
          <h3>Git</h3>
          <h3>Heroku</h3>
        </section>
        <section id="workflow">
          <div class="page-header">
            <h1>Workflow</h1>
          </div>
          <h3>Version Control</h3>
          <h3>Syncing with others - Git Pull</h3>
          <h3>Make local changes - Git Add/Commit</h3>
          <h3>Share your changes - Git Push</h3>
          <h3>Redeploying Site</h3>
        </section>
      </div><!-- /.span9 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'includes/footer.inc.php' ?>
