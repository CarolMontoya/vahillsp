<?php
global $siteTitle;
$siteTitle = "Swim Team Schedule 2014";
include_once "header.inc";
?>
<style type="text/css" title="currentStyle">
  @import "css/data-table.min.css";
  #doc {
    margin:auto;text-align:left; /* leave unchanged */
    width:73.0769em;/* 950px non-IE */
    *width:71.2502em;/* 950px IE */
    min-width:600px;/* optional but recommended */
  }
</style>
<!--
<div class="rounded">
  <h2 class="announce">Coming soon!</h2>
</div>
 -->
<!--
<?php if(strtotime("2011-06-24") - time() >= -86400) { ?>
<div class="rounded">
  <h2 class="announce">Important schedule change</h2>
  <p>This year our Friday night Spaghetti Dinner will conflict with practices since we haven't yet moved to morning practices. So, this Friday, we'll begin a morning practice for 13-18 year olds, from 7:45 - 9:00 am. There will not be an afternoon practice for 13-18s.</p>

  <p>Later on Friday, 8 & unders will swim from 5-5:30 pm and 9-12s from 5:30-6 pm. The dinner set up will begin at 5:30 and we can eat at 6 pm.</p>

  <p>Next week we move as planned to morning practices every day and afternoon practices Tuesday and Thursday.</p>
</div>
<?php } ?>
-->
<div class="rounded">

  <h2>Swim Team Schedule</h2>
  <p align="center"><img src="images/swteam1.jpg" width="365" height="274" alt="Swimmers at the start"></p>
  <h3>2014 Tidal Wave Schedule<br>
  Division <?php echo $division ?></h3>

  <p>Download a <a href="docs/SwimCalendar2014.pdf">printable schedule</a>.</p>

  <h4>Important Dates in 2014</h4>
  <ul>
    <li><em>Tuesday, May 27:</em> First day of practice</li>
    <li><em>Tuesday, May 27, 6:00 pm:</em> Orientation meeting for parents new to swim team</li>
    <li><em>Friday, June 6, 5:30-7:30 pm:</em> Team suit sale</li>
    <li><em>Friday, June 20, 6:00 pm:</em> Spaghetti dinner</li>
    <li><em>Friday, June 27 &amp; July 11, 7:00pm:</em> Pep Rally/ice cream</li>
    <li><em>Monday, June 30th:</em> Morning practice begins</li>
    <li><em>Friday, July 4:</em> Pancake breakfast</li>
    <li><em>Friday, July 5:</em> Campout and team pictures</li>
    <li><em>Tuesday, July 15:</em> Kings Dominion Day</li>
    <li><em>Saturday, July 26, 6:00 pm:</em> End of season banquet & awards</li>
  </ul>
  <h5>Practice Schedule 2014</h5>

  <p>Note that there is NO morning practice until Monday, June 30.</p>

  <table class="schedule" width="100%">
    <tr>
      <td></td>
      <th>New Swimmers</th>
      <th>Ages 8 and under</th>
      <th>Ages 9-12</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th colspan="5" class="divider">May 27 - June 26</th>
    </tr>
    <tr>
      <th>Monday thru Friday<br>evening practice only</th>
      <td>5:00 - 5:30 pm</td>
      <td>5:30 - 6:15 pm</td>
      <td>6:15 - 7:00 pm</td>
      <td>7:00 - 8:00 pm</td>
    </tr>
    <tr>
      <th colspan="5" class="divider">June 27 - July 25</th>
    </tr>
    <tr>
      <th>Monday thru Friday<br/>Morning practice</th>
      <td>10:15 - 10:45 am
      <td>9:30 - 10:15 am</td>
      <td>8:45 - 9:30 am</td>
      <td>7:30 - 8:45 am</td>
    </tr>
    <tr>
      <th>Tuesday - Thursday<br>Evening practice*</th>
      <td>5:00 - 5:30 pm</td>
      <td>5:30 - 6:15 pm</td>
      <td>6:15 - 7:00 pm</td>
      <td>7:00 - 8:00 pm</td>
    </tr>
  </table>
  <p>* Once morning practice starts on June 30th please attend in the mornings
  if possible.  Evening practices will only be for swimmers unable to attend
  mornings.</p>

<h5>Meet Schedule 2014</h5>
  <p>Details will be posted each week for upcoming events.  Saturday "A" Meets typically run from 8:00 am (warm-ups) to 11:30 am.  Monday "B" Meets typically run from
5:00 pm (warm-ups) to 8:30 pm.</p>
  <ul>
    <li>Remember that warm-ups start before meet times!</li>
  </ul>
  <p>A meets are competitive; B meets are developmental.</p>
<h5>A Meet Availability sign-up</h5>
  <p>Please sign up <a href="http://www.signupgenius.com/go/70A044EA9A6229-availability">here</a>
    for the A Meets. Remember to update your availability as it changes, please.
  </p>
  <table id="MeetSchedule" width="90%" border="1" align="center" class="display">
    <thead>
      <tr>
        <th>Date</th>
        <th>Type</th>
        <th>Team</th>
        <th>HOME/AWAY</th>
        <th>Notes</th>
        <th>Results</th>
        <th>W/L</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>June 14</td>
        <td>Practice Meet (Time Trials)</td>
        <td>Highland Park</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 16</td>
        <td>B meet</td>
        <td>Holin Meadows</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td><a href="docs/swim-team-results/2014-06-16-HM-improvement.pdf">Improvements</a></td>
      </tr>
      <tr>
        <td>June 21</td>
        <td>A meet</td>
        <td><a href="https://www.google.com/maps/preview?gl=us&hq=rolling+hills+swim+club&daddr=8301+Carrleigh+Pkwy,+Springfield,+VA+22152&panel=1&f=d&fb=1&geocode=FbHVTwIdj5Jl-ylJ8sEpfU22iTGtive3dqtthg&cid=9686586899924748973">Rolling Hills</a></td>
        <td>AWAY</td>
        <td><a href="http://www.signupgenius.com/go/10c0c44a8a62aa57-vahills1">Volunteer</a></td>
        <td class="nobr"><a href="http://www.mynvsl.com/results/73/?back=dt">221-198</a></td>
        <td>W</td>
      </tr>
      <tr>
        <td>June 23</td>
        <td>B meet</td>
        <td><a href="https://www.google.com/maps/dir//5505+Montgomery+St,+Springfield,+VA+22151/@38.8020239,-77.1784212,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89b7b2c6cf153761:0x6d942a4871c2316d!2m2!1d-77.1778999!2d38.802198">Bren Mar - Edsall Park</a></td>
        <td>AWAY</td>
        <td><a href="http://www.signupgenius.com/go/10c0c44a8a62aa57-virginia1">Volunteer</a></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 28</td>
        <td>A meet</td>
        <td><a href="https://www.google.com/maps/dir//9800+Commonwealth+Blvd,+Fairfax,+VA+22032/@38.813909,-77.3177598,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x89b64ddee3cd02b1:0x8467eb9bb906eb38!2m2!1d-77.283427!2d38.813914">Commonwealth</a></td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr"></td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 30</td>
        <td>B meet</td>
        <td><a href="https://www.google.com/maps/preview?gl=us&hq=highland+park+pool&daddr=6406+Telegraph+Rd,+Alexandria,+VA+22310&panel=1&f=d&fb=1&geocode=FRq4TwId_W5n-yn7PNa4BLK3iTEOt36Dvn9Hcw&cid=8306748493934802702">Highland Park</a></td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 5</td>
        <td>A meet</td>
        <td>Fairfax Club</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 7</td>
        <td>B Meet</td>
        <td>Lorton Station</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 9</td>
        <td>Relay Carnival</td>
        <td><a href="https://www.google.com/maps/dir//8201+Southrun+Rd,+Springfield,+VA+22153/@38.7352561,-77.225947,1448m/data=!3m1!1e3!4m13!1m4!3m3!1s0x89b6531ba633ec07:0x1ad7919cdfcce87c!2s8201+Southrun+Rd!3b1!4m7!1m0!1m5!1m1!1s0x89b6531ba633ec07:0x1ad7919cdfcce87c!2m2!1d-77.2259474!2d38.7352556?hl=en-US">Newington Forest</a></td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr"></td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 12</td>
        <td>A meet</td>
        <td>Ilda</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 13</td>
        <td>Relay Championships</td>
        <td>(qualifying relay teams only)</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 14</td>
        <td>B Meet</td>
        <td>Hayfield</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 16</td>
        <td>All Star Relay Meet</td>
        <td>(qualifying relay teams only)</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 19</td>
        <td>A meet</td>
        <td><a href="https://www.google.com/maps/dir//8201+Southrun+Rd,+Springfield,+VA+22153/@38.7352561,-77.225947,1448m/data=!3m1!1e3!4m13!1m4!3m3!1s0x89b6531ba633ec07:0x1ad7919cdfcce87c!2s8201+Southrun+Rd!3b1!4m7!1m0!1m5!1m1!1s0x89b6531ba633ec07:0x1ad7919cdfcce87c!2m2!1d-77.2259474!2d38.7352556?hl=en-US">Newington Forest</a></td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 21</td>
        <td>IM Invitational</td>
        <td>TBD</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 26</td>
        <td>Divisionals</td>
        <td>VA Hills</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>August 2</td>
        <td>Individual All Stars</td>
        <td>(qualifying swimmers only)</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <div align="center"><img src="images/teampicbanquet.jpg" width="514" height="290" alt="Team picnic banquet"></div>
</div>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
  $('#MeetSchedule').dataTable( {
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bSort": true,
    "bInfo": false,
    "bAutoWidth": false,
    "aoColumns": [
      { "sType": 'date' },
      null,
      null,
      null,
      null,
      null,
      null
    ]
  } );
} );
</script>
<?php include_once "footer.inc"; ?>
