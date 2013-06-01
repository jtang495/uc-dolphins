<!DOCTYPE html>
<?php require 'head.inc.php' ?>
<link href="css/fullcalendar.css" rel="stylesheet" />
<link href="css/fullcalendr.print.css" rel="stylesheet" />
<style>
  #loading {
    position: absolute;
    top: 5px;
    right: 5px;
  }
  #calendar {
    width: 80%;
    margin: 0 auto;
  }
</style>

<title>Calendar - UCD</title>
<div id="wrap">
  <!-- Include navigation bar -->
  <?php require 'navbar.inc.php' ?>
  <div id="push"></div>
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container">
    <div class="marketing">
      <div id="loading" style="display: none;"></div>
      <div id="calendar"></div>  
    </div><!-- /.marketing -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'footer.inc.php' ?>
<script src="js/fullcalendar.min.js"></script>
<script src="js/gcal.js"></script>
<script>
  $(document).ready(function() {
    $("#calendar").fullCalendar({
      events: "https://www.google.com/calendar/feeds/l1sbfdasf9s3jnmd87mndhhltg%40group.calendar.google.com/public/basic",
      loading: function(bool) {
        if (bool) {
          $("#loading").show();
        } else {
          $("#loading").hide();
        }
      }
    });
  });
</script>
