<?php 
  global $siteTitle;
  $siteTitle = "Home";
  include_once "header.inc"; 
?>
<div class="rounded">
  <h1>Now Accepting New Members for 2010 Season - No Waiting List!</h1>
  <?php
    $dates = array("2010-06-21" => "5:00pm for swim team",
                   "2010-07-04" => "6:00pm",
                   "2010-07-05" => "5:00pm for swim team",
                   "2010-07-12" => "5:00pm for swim team",
                   "2010-07-19" => "5:00pm for swim team"
                  );
    $today = time();

    foreach ($dates as $date => $time) {
      $date = strtotime($date);
      $datediff = $date - $today;
      //echo "$today --- $date --- " . ($today - $date) . " $time<br>";
      if ($datediff >= 0 && $datediff < 2 * 86400) {
        echo "<h2>Pool closes early at $time on " . strftime("%A, %B %d, %Y", $date) . "</h2>";
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
          <a href="record.php">Paige Collins Sets <span style="color:red;text-decoration:underline;">Another</span> Tidal Wave Record!</a>
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
