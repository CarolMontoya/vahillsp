<?php 
  global $siteTitle;
  $siteTitle = "Home";
  include_once "header.inc"; 
?>
<div class="rounded">
  <h1>Now Accepting New Members for 2010 Season - No Waiting List!</h1>
  <?php
    $dates = array("2010-06-21" => "5:00pm",
                   "2010-07-04" => "6:00pm",
                   "2010-07-05" => "5:00pm",
                   "2010-07-12" => "5:00pm",
                   "2010-07-19" => "5:00pm"
                  );
    $today = new DateTime();

    foreach ($dates as $date => $time) {
      $date = new DateTime($date);
      $datediff = $today->diff($date);
      $datediff = $datediff->format("%r%d");
      if ($datediff >= 0 && $datediff < 2) {
        echo "<h2>Pool closes early at $time on " . $date->format("l F jS, Y") . " for swim team</h2>";
      }
    }
  ?>
  <div class="posrel">
    <div>
      <img src="images/collage-main.jpg"
           width="608"
           height="436"
           border="0"
           alt="Main collage"
           usemap="#main-collage-map">
    </div>
    <div class="image-title">
      Virginia Hills Pool: New for 2009
    </div>
    <div class="collage-header">
      <ul class="collage-links">
        <li>
          <a href="record.php">Paige Collins Sets Tidal Wave Record!</a>
        </li>
        <li>
          <a href="4th-july.php">4th of July Fun Fest!</a>
        </li>
      </ul>
    </div>
    <iframe frameborder="0" scrolling="auto" width="590" height="710" src="http://vahillsp.questionform.com/embed/Pool-Satisfaction">
<a href="http://vahillsp.questionform.com/public/Pool-Satisfaction"> http://vahillsp.questionform.com/public/Pool-Satisfaction </a>
</iframe>
    <div class="collage-blurb">
      Nestled in the heart of the Virginia Hills
      Community, the Virginia Hills Pool provides
      a unique environment surrounded by rolling
      hills, shaded green space, and the wooded
      backdrop of <a href=
      "http://www.fairfaxcounty.gov/parks/rec/leerec.htm">
      Lee District Park</a>.
    </div>
  </div>
</div>
<?php include_once "footer.inc"; ?>
