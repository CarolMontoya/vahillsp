<?php
  global $siteTitle;
  $siteTitle = "Home";
  include_once "header.inc";
?>
<div class="rounded">
  <?php
    $closures = array(
                   "2011-06-27" => "closes early at 5:00pm for swim team meet",
                   "2011-07-04" => "closed 9:00am to about noon for swim team meet, then closes early at 6:00pm",
                   "2011-07-09" => "opens late at 1:00pm for swim team meet",
                   "2011-07-11" => "closes early at 5:00pm for swim team meet",
                   "2011-07-16" => "opens late at 1:00pm for swim team meet",
                   "2011-07-18" => "closes early at 5:00pm for swim team meet",
                   "2011-07-23" => "opens late at 1:00pm for swim team meet",
                   "2011-09-05" => "closes early at 2:00/6:00pm for labor day (last day for the season - cleanup from 2:00pm to 6:00pm)",
                   "2012-06-16" => "opens late at 1:00pm for swim team meet",
                   "2012-06-18" => "closes early at 5:00pm for swim team meet",
                   "2012-06-30" => "closed today due to phone outage - call (703) 329-2360 to see if service has been restored",
                   "2012-07-01" => "WILL NOT OPEN today due to issues with the pumps",
                   "2012-07-02" => "is operating normally today - come on by to try and beat the heat",
                   "2013-06-22" => "opens late at 12:00pm for swim team meet",
                   "2013-06-24" => "closes early at 5:00pm for swim team meet",
                   "2013-07-01" => "closes early at 5:00pm for swim team meet",
                   "2013-07-06" => "opens late at 12:00pm for swim team meet",
                   "2013-07-08" => "closes early at 5:00pm for swim team meet",
                   "2013-07-13" => "opens late at 12:00pm for swim team meet",
                   "2013-07-17" => "closes early at 7:30pm for movie night",
                   "2013-08-13" => "closed until 6:00pm for disinfecting",
                   "2014-06-14" => "opens late at 2:00pm for swim team meet",
                   "2014-06-16" => "closes early at 4:45pm for swim team meet",
                   "2014-07-05" => "opens late at 12:00pm for swim team meet",
                   "2014-07-07" => "closes early at 5:00pm for swim team meet",
                   "2014-07-12" => "opens late at 12:00pm for swim team meet",
                   "2014-07-14" => "closes early at 5:00pm for swim team meet",
                   "2014-07-26" => "opens late at 3:00pm for divisional swim team meet",
                  );
    $today = time();

    foreach ($closures as $closure => $time) {
      $closure = strtotime($closure);
      $datediff = $closure - $today;
      //echo "$today --- $closure --- " . ($today - $closure) . " $time<br>";
      if ($datediff >= -86400 && $datediff < 2 * 86400) {
        echo "<h2 class=\"announce\">Pool $time on " . strftime("%A, %B %d, %Y", $closure) . "</h2>";
      }
    }
  ?>
  <div class="gadget center">
    <!--
    <script src="http://www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/113344792581211145083/PWS.xml&amp;up_pref_station=KVAALEXA29&amp;up_pref_units=english&amp;up_pref_camurl=&amp;up_pref_updatefreq=120&amp;synd=open&amp;w=200&amp;h=100&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
    -->
    <a class="no-external" href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:22315.2.99999&bannertypeclick=wu_clean2day" title="Kingstowne, Virginia Weather Forecast" target="_blank"><img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_clean2day_cond&airportcode=KDAA&ForcedCity=Kingstowne&ForcedState=VA&zip=22315&language=EN" alt="Find more about Weather in Kingstowne, VA" width="300" /></a><br><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:22315.2.99999&bannertypeclick=wu_clean2day" title="Get latest Weather Forecast updates" style="font-family: sans-serif; font-size: 12px" target="_blank">Click for weather forecast</a>
  </div>
  <div class="posrel">
    <div>
      <img src="images/collage-main.jpg"
           width="608"
           height="436"
           alt="Main collage"
           usemap="#main-collage-map">
    </div>
    <div class="image-title">
      Virginia Hills Pool: Welcome to the <?php echo date('Y'); ?> season
    </div>
    <div class="collage-header">
      <ul class="collage-links">
        <?php if(strtotime("2011-06-21") - time() >= -86400) { ?>
        <li>
          <a href="docs/2011 Flier School's Out Party.pdf">Annual Last Day of School Party June 21 1:00 - 2:30</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2011-06-24") - time() >= -86400) { ?>
        <li>
          <a href="swim-team-sched.php">Swim Team spaghetti dinner this Friday</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2011-07-15") - time() >= -86400) { ?>
        <li>
          <a href="aerobics.php">2011 Water Aerobics signup here</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2011-07-28") - time() >= -86400) { ?>
        <li>
          Afternoon swim practices through June 24
        </li>
        <?php } ?>
        <?php if(strtotime("2011-08-21") - time() > 0) { ?>
        <li>
          <a href="adult-socials.php">Pool Social August 21</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2011-09-01") - time() > 0) { ?>
        <li>
          <a href="membership.php">August share sale is on!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2011-09-06") - time() > 0) { ?>
        <li>
          Baby Pool opens 10:00 a.m. DAILY (except Sundays)
        </li>
        <?php } ?>
        <?php if(strtotime("2012-09-03") - time() < 0 && strtotime("2013-05-24") - time() > 0) { ?>
        <li class="red">
          Pool is closed for the winter - see you next year!
        </li>
        <?php } ?>
        <?php if(strtotime("2011-11-18") - time() < 0 && strtotime("2012-03-29") - time() > 0) { ?>
        <li>
          <a href="winter-swim-2012.php">Winter Swim is On - click here for more infos!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-05-25") - time() < 0 && strtotime("2013-09-01") - time() > 0) { ?>
        <li>
          <a href="membership.php">Pool is Open - Sign up now!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-03-01") - time() < 0 && strtotime("2013-05-24") - time() > 0) { ?>
        <li class="red">
          <a href="membership.php">Pool Opens May 25 - Sign up now!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2012-06-04") - time() > 0) { ?>
        <li>
          <a href="schedule.php#open-house">Open House June 3</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2012-06-30") - time() > 0) { ?>
        <li>
          <a href="swim-team-sched.php">Swim Team Spaghetti Dinner 6/29</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2012-07-04") - time() > 0) { ?>
        <li>
          <a href="4th-july.php">Fourth of July Party</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2012-07-20") - time() > 0) { ?>
        <li>
          <a href="record2.php#update">Swim Team News - <span style="color:red">Another</span> New Pool Record!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-06-14") - time() > 0) { ?>
        <li>
          <a href="swim-team-sched.php">Swim Team News - swim suit sale moved to June 14</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-09-02") - time() > 0) { ?>
        <li>
          <a href="http://www.signupgenius.com/go/60B0C4FA8A62E5-pool/9578530">Snack Bar needs Volunteers - sign up here</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-07-13") - time() > 0) { ?>
        <li>
          <a href="http://www.surveymonkey.com/s/F3TXKCQ">Snack Bar Survey - tell us what you'd like to see</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-07-28") - time() > 0) { ?>
        <li>
          <a href="http://www.signupgenius.com/go/70A044EA9A6229-availability">Swim Team A-Meet availability sign-up sheet</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-06-20") - time() > 0) { ?>
        <li>
          <a href="end-of-school-party.php">End of School Party!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-07-18") - time() > 0) { ?>
        <li>
          Movie night moved to Wed 7/17 due to weather, <a href="http://vols.pt/8W8ZLD">sign up here</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2013-09-02") - time() < 0 && strtotime("2014-05-24") - time() > 0) { ?>
        <li class="red">
          Pool is closed for the winter - see you next year!
        </li>
        <?php } ?>
        <?php if(strtotime("2014-06-21") - time() > 0) { ?>
        <li>
          <a href="swim-team-pasta-dinner.php">Swim Team Pasta Dinner June 20</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2014-06-22") - time() > 0) { ?>
        <li>
          <a href="adult-socials.php">Happy Hour June 21</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2014-06-23") - time() > 0) { ?>
        <li>
          <a href="aqua-zumba.php">Aqua Zumba June 22</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2014-06-27") - time() > 0) { ?>
        <li>
          <a href="end-of-school-party.php">End of School Year Party <span class="announce">June 26</span></a>
        </li>
        <?php } ?>
        <?php if(rand(0, 100) > 50 && strtotime("2014-09-01") - time() > 0) { ?>
        <li>
          <a href="http://vols.pt/mE2kJ8" class="red">Sign up for Snackbar!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2014-07-05") - time() > 0) { ?>
        <li>
          <a href="4th-july.php">Fourth of July Party</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2014-07-15") - time() > 0) { ?>
        <li>
          <a href="record3.php">4 Tidal Wave records broken!</a>
        </li>
        <?php } ?>
        <?php if(strtotime("2014-07-23") - time() > 0) { ?>
        <li>
          <a href="record4.php">4 more Tidal Wave relay records broken!</a>
        </li>
        <?php } ?>
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
  <h2>Early Closings</h2>
  <p>Below is a list of the dates where the pool will close outside of
  its regular schedule. The dates will also be announced at the top of this
  page as they come up.</p>
  <ul>
  <?php
    foreach ($closures as $closure => $time) {
      if(strtotime($closure) - time() >= -86400) {
        $closure = strtotime($closure);
        $datediff = $closure - $today;
        echo "<li>" . strftime("%A, %B %d, %Y", $closure) . ": $time</li>";
      }
    }
  ?>
  </ul>
</div>

<!--
<div class="rounded">
  <p align="center">
    <img src="images/site/tidalwave50years.png" alt="Tidal Wave 50 year anniversary" width="400px" height="372px">
  </p>
  <h2>Congrats Tidal Wave!</h2>
  <p>
    The swim team was founded in 1961, so we celebrated our 50th
    anniversary last year - can you believe it? Congrats to everyone
    and here's to another 50 years!
  </p>
</div>
-->

<?php if(strtotime("2013-07-25") - time() > 0) { ?>
<div class="rounded">
  <h2>Pictures</h2>
  <p>
    Swim Team pictures from 2013 are <a href="swim-team.php">on the main swim team page</a>
</div>
<?php } ?>
<?php include_once "footer.inc"; ?>
