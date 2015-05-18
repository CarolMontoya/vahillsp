<?php
	global $siteTitle;
	$siteTitle = "Schedule";
	include_once "header.inc";
?>
<div class="rounded">
  <div class="yui-g">
    <h2>
      Hours (<?php echo date('Y'); ?>)
    </h2>
    <h4>
      Hours of operation:
    </h4>
    <p>
      <b>Opening Day <?php echo date('Y'); ?> is <?php echo "Saturday, May 23, 2015" # date('l, F j', strtotime("last Saturday", mktime(0, 0, 0, 6, 1, date('Y')))); ?>.</b>
    </p>
    <p>
      <table>
        <tr>
          <td>May 23, 2015 – June 19</td>
          <td>Weekends</td>
          <td>11:00am to 8:00pm daily (including Memorial Day)</td>
        </tr>
        <tr>
          <td></td>
          <td>Weekdays</td>
          <td>4:00pm to 8:00pm</td>
        </tr>
        <tr>
          <td>June 20 – September 7</td>
          <td>Daily</td>
          <td>
            11:00am – 8:30pm (no break at 7:45pm)
          </td>
      </table>
    </p>
    <h4>
      Exceptions:
    </h4>
    <p>
      Baby pool opens at 10:00am daily except Sunday
    </p>
    <p>
      Wednesdays in July & August Pool Closes at 9:00pm.
    </p>
    <p>
      4th of July and Labor Day - close at 6:00pm
    </p>
    <p>
      Closing time of 8:30pm means the front gate will close at 8:30pm.
    </p>
    <p>
      Pool operating hours are subject to change for weather or special events.
      See pool calendar for details.
    </p>
    </p>
    <h2>
      <a href="<?php
        if (file_exists(date('Y') . "Calendar.pdf")) {
          echo date('Y') . "Calendar.pdf";
        } else {
          echo "javascript:alert('Coming soon!');";
        }
      ?>"><?php echo date('Y'); ?> Calendar</a>
    </h2>
    <img src="images/kids.jpg"
      width="266"
      height="187"
      align="top"
      alt="">
  </div>
  <!--<p>
    * There are three swim meets which will interfere
    with Monday evening hours. On June 22, July 6,
    and July 13 the pool will close at 5 pm.
  </p>-->
  <h2>
    Events
  </h2>
  <p>
    While Virginia Hills Pool prides itself in
    providing an atmosphere for relaxation, it also
    offers a broad range of activities for its
    members. A tentative list of special activities
    planned for the <?php echo date('Y'); ?> season follows. Notices
    will be placed at the pool and e-mails sent to
    members during the season confirming these
    events:
  </p>
  <table class="events">
    <?php if(strtotime("2012-07-05") - time() > 0) { ?>
    <tr>
      <th>
        <a name="independence-day"></a><?php echo date('l, F jS, Y', strtotime(date('Y').'-07-04')); ?> &ndash;
      </th>
      <td>
        <a href="4th-july.php">Fourth of July party!</a> Chip in - contact <a href="mailto:&#109;&#105;&#116;&#99;&#104;&#101;&#108;&#108;&#97;&#110;&#100;&#115;&#117;&#122;&#121;&#64;&#106;&#117;&#110;&#111;&#46;&#99;&#111;&#109;">Suzy Thompson</a>
      </td>
    </tr>
    <?php } ?>
    <?php if(strtotime("2012-06-11") - time() > 0) { ?>
    <tr>
      <th>
        <a name="open-house"></a><?php echo date('l, F jS, Y', strtotime('2012-06-03')); ?> &ndash;
      </th>
      <td>
        Open House - 12:00pm - 4:00pm<br/>
              </td>
    </tr>
    <?php } ?>
    <tr>
      <th>
        <a name="raft-night"></a>Raft nights &ndash;
      </th>
      <td>
        Bring your inflatables and
        have fun in the water for an extra hour,
        until 9:00pm, on Wednesdays in July and August.
      </td>
    </tr>
  </table>
</div>
<?php include_once "footer.inc"; ?>
