<?php 
  global $siteTitle;
  $siteTitle = "Home";
  include_once "header.inc"; 
?>
<div class="rounded">
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
      if ($datediff >= -86400 && $datediff < 2 * 86400) {
        echo "<h2>Pool closes early at $time on " . strftime("%A, %B %d, %Y", $date) . "</h2>";
      }
    }
  ?>
  <div class="posrel">
    <div>
      <img src="images/collage-main.jpg"
           width="608"
           height="436"
           alt="Main collage"
           usemap="#main-collage-map">
    </div>
    <div class="image-title">
      Virginia Hills Pool: Looking forward to the 2011 season
    </div>
    <div class="collage-header">
      <ul class="collage-links">
        <li>
          Swim team practices start Tuesday, May 31
        </li>
        <li>
          Baby Pool will open at 10:00 a.m. DAILY (except Sundays)
        </li>
        <li>
          Open House for Prospective Members, Sunday, June 5, 12:00 - 4:00
        </li>
      </ul>
    </div>
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
<div class="rounded">
  <p align="center">
    <img src="/images/site/tidalwave50years.png" alt="Tidal Wave 50 year anniversary">
  </p>
  <h2>Congrats Tidal Wave!</h2>
  <p>
    The swim team was founded in 1961, so we're celebrating our 50th
    anniversary this year - can you believe it? Congrats to everyone
    and here's to another 50 years!
  </p>
</div>
<?php include_once "footer.inc"; ?>
