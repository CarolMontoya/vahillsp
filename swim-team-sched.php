<?php
global $siteTitle;
$siteTitle = "Swim Team Schedule 2010";
include_once "header.inc";
?>
<style type="text/css" title="currentStyle">
  @import "css/data-table.css";
</style>
<div class="rounded">

  <h2>Swim Team Schedule</h2>
  <p align="center"><img src="images/swteam1.jpg" width="365" height="274"></p>
  <h3>2010 Tidal Wave Schedule<br>
  Division 17</h3>
  <p><strong>Download <a href="2010Calendar.pdf">Pool Calendar</a> <img src="images/pdf.gif" width="15" height="16"></strong></p>
  <!--<table width="90%" border="0" align="center">
    <tr>
      <td colspan="3"><p><strong>Important Dates:</strong></p>
        <ul>
          <li>TBD</li>
        </ul>
      </td>
    </tr>
  </table>-->
  <h5>Practice Schedule</h5>
  <table width="90%" border="1" align="center">
    <tr>
      <td></td>
      <th>Ages 8 and under</th>
      <th>Ages 9-12</th>
      <th>Ages 13-18</th>
    </tr>
    <tr>
      <th colspan="4">June 1 - June 25</th>
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
      <th>June 28 - July 30</th>
      <td colspan="2">Ages 12 and under</td>
      <td>Ages 13-18</td>
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
5: 00 pm (warm-ups) to 8:30 pm.</p>
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>June 19</td>
        <td>Time trials</td>
        <td>Highland Park</td>
        <td>AWAY</td>
        <td></td>
      </tr>
      <tr>
        <td>June 21</td>
        <td>B meet</td>
        <td>Stratford Rec Assn</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>June 25</td>
        <td>FUN</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>Spaghetti Dinner</td>
      </tr>
      <tr>
        <td>June 26</td>
        <td>A meet</td>
        <td>Pinewood</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>June 28</td>
        <td>B meet</td>
        <td>Little Hunting Park</td>
        <td>AWAY</td>
        <td></td>
      </tr>
      <tr>
        <td>July 3</td>
        <td>A meet</td>
        <td>Bren Mar-Edsall Park</td>
        <td>AWAY</td>
        <td>at Bren Mar pool on Edsall Road</td>
      </tr>
      <tr>
        <td>July 5</td>
        <td>B meet</td>
        <td>Highland Park</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>July 7</td>
        <td>Division Relay Carnival</td>
        <td>Broyhill Crest</td>
        <td>AWAY</td>
        <td></td>
      </tr>
      <tr>
        <td>July 10</td>
        <td>A meet</td>
        <td>Rolling Valley</td>
        <td>AWAY</td>
        <td></td>
      </tr>
      <tr>
        <td>July 12</td>
        <td>B meet</td>
        <td>Lorton Station</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>July 17</td>
        <td>FUN</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>Team Photo (6:00pm) and Camp out</td>
      </tr>
      <tr>
        <td>July 17</td>
        <td>A meet</td>
        <td>Herndon</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>July 18</td>
        <td>Relay Championship Meet</td>
        <td>Lincolnia Park</td>
        <td>AWAY</td>
        <td>only for qualifying relay teams</td>
      </tr>
      <tr>
        <td>July 19</td>
        <td>B meet</td>
        <td>Hayfield</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>July 24</td>
        <td>A meet</td>
        <td>Broyhill Crest</td>
        <td>HOME</td>
        <td></td>
      </tr>
      <tr>
        <td>July 26</td>
        <td>IM Invitational</td>
        <td>N/A</td>
        <td>TBA</td>
        <td>place TBA</td>
      </tr>
      <tr>
        <td>July 28</td>
        <td>FUN</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>King's Dominion Day</td>
      </tr>
      <tr>
        <td>July 31</td>
        <td>Divisionals</td>
        <td>N/A</td>
        <td>AWAY</td>
        <td>at Edsall Park pool (at the end of Montgomery Street)</td>
      </tr>
      <tr>
        <td>July 31</td>
        <td>FUN</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>End of Season Banquet (6:00pm)</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <div align="center"><img src="images/teampicbanquet.jpg" width="514" height="290"></div>
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
      null
    ]
	} );
} );
</script>

<?php include_once "footer.inc"; ?>
