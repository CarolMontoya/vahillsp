<?php
	global $siteTitle;
  $currentYear = 2014;
	$siteTitle = "Swim Team Pasta Dinner " . $currentYear;
	include_once "header.inc";
?>
        <div class="rounded">
          <div class="yui-g">
            <div class="yui-u first">
              <h1>Swim Team Pasta Dinner <?php echo $currentYear ?></h1>
              Annual Pasta Dinner for the whole team is Friday 6/20 at the pool starting at 6:00pm.
              <a href="docs/2014SwimTeamPastaDinner.pdf">Flyer is here for download.</a>
            </div>
            <div class="yui-u">
              <img src="images/pasta-dinner.jpg" alt="Pasta Dinner clipart" width="250px">
            </div>
          </div>
        </div>
<?php include_once "footer.inc"; ?>
