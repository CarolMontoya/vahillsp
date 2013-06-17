<?php
global $siteTitle;
$siteTitle = "Swim Team Schedule 2013";
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
  <h3>2013 Tidal Wave Schedule<br>
  Division <?php echo $division ?></h3>

  <h4>Important Dates in 2013</h4>
  <ul>
    <li><em>Tuesday, May 28</em> First day of practice</li>
    <li><em>Tuesday, May 28, 6:00 pm</em> Orientation meeting for parents new to swim team</li>
    <li><em>Friday, June 14, 5:30-7:30 pm</em> Team suit sale <em>NEW DATE!</em></li>
    <li><em>Friday, June 21, 6:00 pm</em> Spaghetti dinner</li>
    <li><em>Friday, July 6</em> Campout and team picture</li>
    <li><em>Saturday, July 27, 6:00 pm</em> End of season banquet</li>
  </ul>
  <h5>Practice Schedule 2013</h5>

  <p>Note that there is NO morning practice until Thursday, June 20.</p>

  <table class="schedule" width="100%">
    <tr>
      <td></td>
      <th>New Swimmers</th>
      <th>Ages 8 and under</th>
      <th>Ages 9-12</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th colspan="6" class="divider">May 29 - June 19</th>
    </tr>
    <tr>
      <th>Monday thru Friday<br>Afternoon practice only</th>
      <td>5:00 - 5:30 pm</td>
      <td>5:30 - 6:15 pm</td>
      <td>6:15 - 7:00 pm</td>
      <td>7:00 - 8:00 pm</td>
    </tr>
    <tr>
      <th colspan="6" class="divider">June 20 - July 29</th>
    </tr>
    <tr>
      <td></td>
      <th>New Swimmers</th>
      <th colspan="2">Ages 12 and under</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th>Monday thru Friday<br/>Morning practice</th>
      <td>10:00 - 10:30 am
      <td colspan="2">9:00 - 10:00 am</td>
      <td>7:45 - 9:00 am</td>
    </tr>
    <tr>
      <td></td>
      <th>New Swimmers</th>
      <th>Ages 8 and under</th>
      <th>Ages 9-12</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th>Tuesday, Wednesday and Thursday<br>Afternoon practice*</th>
      <td>5:00 - 5:30 pm</td>
      <td>5:30 - 6:15 pm</td>
      <td>6:15 - 7:00 pm</td>
      <td>7:00 - 8:00 pm</td>
    </tr>
  </table>
  <p>* Please note the Tuesday, Wednesday and Thursday afternoon practices are
    only for those families who cannot make it to morning practice.</p>

<h5>Meet Schedule 2013</h5>
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
        <td>June 15</td>
        <td>Practice Meet</td>
        <td>Highland Park</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 17</td>
        <td>B meet</td>
        <td>Holin Meadows</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 22</td>
        <td>A meet</td>
        <td>Pleasant Valley</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 24</td>
        <td>B meet</td>
        <td>Little Hunting Park</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>June 29</td>
        <td>A meet</td>
        <td>Parklawn</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 1</td>
        <td>B meet</td>
        <td>Highland Park</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 6</td>
        <td>A meet</td>
        <td>Somerset Olde Creek</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 6</td>
        <td>Fun!</td>
        <td>Campout and team picture</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 8</td>
        <td>B Meet</td>
        <td>Lorton Station</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 10</td>
        <td>Relay Carnival</td>
        <td>Pleasant Valley</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 13</td>
        <td>A meet</td>
        <td>Lincolnia Park</td>
        <td>HOME</td>
        <td></td>
        <td class="nobr"></td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 15</td>
        <td>B Meet</td>
        <td>Hayfield</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 20</td>
        <td>A meet</td>
        <td>Herndon</td>
        <td>AWAY</td>
        <td></td>
        <td class="nobr">-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July 27</td>
        <td>Divisionals</td>
        <td>Parklawn</td>
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
