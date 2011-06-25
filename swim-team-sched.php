<?php
global $siteTitle;
$siteTitle = "Swim Team Schedule 2011";
include_once "header.inc";
?>
<style type="text/css" title="currentStyle">
  @import "css/data-table.css";
  #doc {
    margin:auto;text-align:left; /* leave unchanged */
    width:65em;/* 950px non-IE */
    *width:64em;/* 950px IE */
    min-width:600px;/* optional but recommended */
  }
</style>
<?php if(strtotime("2011-06-24") - time() >= -86400) { ?>
<div class="rounded">
  <h2 class="announce">Important schedule change</h2>
  <p>This year our Friday night Spaghetti Dinner will conflict with practices since we haven't yet moved to morning practices. So, this Friday, we'll begin a morning practice for 13-18 year olds, from 7:45 - 9:00 am. There will not be an afternoon practice for 13-18s.</p>

  <p>Later on Friday, 8 & unders will swim from 5-5:30 pm and 9-12s from 5:30-6 pm. The dinner set up will begin at 5:30 and we can eat at 6 pm.</p>

  <p>Next week we move as planned to morning practices every day and afternoon practices Tuesday and Thursday.</p>
</div>
<?php } ?>
<div class="rounded">

  <h2>Swim Team Schedule</h2>
  <p align="center"><img src="images/swteam1.jpg" width="365" height="274" alt="Swimmers at the start"></p>
  <h3>2011 Tidal Wave Schedule<br>
  Division 17</h3>
  <h4>Important Dates in 2011</h4>
  <table width="90%" border="0" align="center">
    <tr>
      <td colspan="3"><p><strong>Important Dates 2011:</strong></p>
        <ul>
          <li><em>Saturday, May 14, 4:00 pm</em> Kick-off Meeting/Ice Cream Social</li>
          <li><em>Tuesday, May 31, 6:00 pm</em> Orientation meeting for parents new to swim team</li>
          <li><em>Friday, June 17, 5-7 pm</em> Team suit sale</li>
          <li><em>Friday, June 24, 6:00 pm</em> Spaghetti dinner</li>
          <li><em>Saturday, July 30, 6:00 pm</em> End of season banquet</li>
        </ul>
      </td>
    </tr>
  </table>
  <h5>Practice Schedule</h5>
  <table width="90%" border="1" align="center">
    <tr>
      <td></td>
      <th>Ages 8 and under</th>
      <th>Ages 9-12</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th colspan="4">May 31 - June 26</th>
    </tr>
    <tr>
      <th>Monday thru Friday<br>Afternoon practice only</th>
      <td>5:30 - 6:15 pm</td>
      <td>6:15 - 7:00 pm</td>
      <td>7:00 - 8:00 pm</td>
    </tr>
    <tr>
      <td colspan="4"></td>
    </tr>
    <tr>
      <th colspan="4">June 27 - July 29</th>
    </tr>
    <tr>
      <td></td>
      <th colspan="2">Ages 12 and under</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th>Monday thru Friday<br/>Morning practice</th>
      <td colspan="2">9:00 - 10:00 am</td>
      <td>7:45 - 9:00 am</td>
    </tr>
    <tr>
      <th>Tuesday and Thursday<br>Afternoon practice</th>
      <td colspan="2">6:00 - 6:45 pm</td>
      <td>7:00 - 8:00 pm</td>
    </tr>
  </table>
  <h5>Meet Schedule</h5>
  <p>Details will be posted each week for upcoming events.  Saturday "A" Meets typically run from 8:00 am (warm-ups) to 11:30 am.  Monday "B" Meets typically run from 
5:00 pm (warm-ups) to 8:30 pm.</p>
  <ul>
    <li>Remember that warm-ups start before meet times!</li>
  </ul>
  <p>A meets are competitive; B meets are developmental.</p>
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
        <td>June 18</td>
        <td>Time Trials at Highland Park</td>
        <td>N/A</td>
        <td>AWAY</td>
        <td></td>
        <td>N/A</td>
        <td>N/A</td>
      </tr>
      <tr>
        <td>June 20</td>
        <td>B meet</td>
        <td>Stratford Rec Assn</td>
        <td>AWAY</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>June 25</td>
        <td>A meet</td>
        <td>Somerset Olde Creek</td>
        <td>AWAY</td>
        <td></td>
        <td>226-170</td>
        <td>L</td>
      </tr>
      <tr>
        <td>June 27</td>
        <td>B meet</td>
        <td>Little Hunting Park</td>
        <td>HOME</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 2</td>
        <td>A meet</td>
        <td>Broyhill Crest</td>
        <td>AWAY</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 4</td>
        <td>B meet</td>
        <td>Highland Park</td>
        <td>HOME</td>
        <td><strong>9am!</strong></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 9</td>
        <td>A meet</td>
        <td>Springfield SRC</td>
        <td>HOME</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 11</td>
        <td>B meet</td>
        <td>Lorton Station</td>
        <td>HOME</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 13</td>
        <td>Division Relay Carnival</td>
        <td>Springfield SRC</td>
        <td>AWAY</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 16</td>
        <td>A meet</td>
        <td>Pinewood</td>
        <td>HOME</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 17</td>
        <td>Relay Championship Meet</td>
        <td>TBA</td>
        <td>TBA</td>
        <td>only for qualifying relay teams</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 18</td>
        <td>B meet</td>
        <td>Hayfield</td>
        <td>HOME</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 23</td>
        <td>A meet</td>
        <td>Bren Mar-Edsall Park</td>
        <td>HOME</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 25</td>
        <td>IM Invitational</td>
        <td>TBA</td>
        <td>TBA</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July 30</td>
        <td>Divisionals</td>
        <td>Broyhill Crest</td>
        <td>AWAY</td>
        <td></td>
        <td></td>
        <td></td>
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
