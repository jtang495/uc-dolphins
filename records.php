<!DOCTYPE html>
<?php require 'includes/head.inc.php' ?>
<title>Upper County Dolphins - Records</title>
<style>
    #team-records td {
      text-align: center;
    }
    #team-records th {
      text-align: center;
    }
    #pool-records td {
      text-align: center;
    }
    #pool-records th {
      text-align: center;
    }
</style>
<div id="wrap">
  <!-- Include navigation bar -->
  <?php require 'includes/navbar.inc.php' ?>         
  <div id="push"></div>
  <div class="container">
    <div class="marketing">
      <div class="featurette">
          <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Under Construction!</strong>
            Pardon our dust while records are being updated.
          </div>
        <h2 class="featurette-heading">Upper County Records<span class="muted"> | Make your mark in history</span></h2>
        <div id="push"></div>
        <p>
          <div class="btn-group" data-toggle="buttons-radio">
            <button id="btn-team" type="button" class="btn active">Team</button>
            <button id="btn-pool" type="button" class="btn">Pool</button>
            <button id="btn-relay" type="button" class="btn">Relay</button>
          </div>
        <?php require 'team-records.inc.php' ?>
        <?php require 'pool-records.inc.php' ?>
      </div> <!-- /.featurette -->
    </div><!-- /.marketing -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'includes/footer.inc.php' ?>
<script>
  $(document).ready(function() {
    $("#team-records").show();
    $("#pool-records").hide();
  });
  
  $("#btn-team").click(function() {
    $("#pool-records").hide();
    $("#team-records").show();
  });

  $("#btn-pool").click(function() {
    $("#team-records").hide();
    $("#pool-records").show();
  });
</script>
