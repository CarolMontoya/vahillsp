<?php
  global $siteTitle;
  $siteTitle = "Pool Socials";
  include_once "header.inc";
?>
<div class="rounded">
          <h2>
            Pool Socials
          </h2><!--        <tr>
          <td width="375"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"><strong>Meet &amp; Greet</strong>: Come socialize with fellow pool members!</font></td>
          <td width="230" rowspan="8"><img src="images/pitcher.jpg" width="200" height="267" hspace="10" vspace="1" align="top"></td>
        </tr>
        <tr>
          <td><ul>
            <li><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"><strong>Saturday, June 27, 8-11 pm </strong></font></li>
          </ul></td>
        </tr>
        <tr>
          <td><ul>
            <li><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">Bring your own booze and an appetizer to share.</font></li>
          </ul></td>
        </tr>
        <tr>
          <td><ul>
            <li><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">No charge; sodas and ice provided</font>.</li>
          </ul>          </td>
        </tr>
        <tr>
          <td><ul>
            <li><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"> The pool will be open for those who wish to take a night-time swim. </font></li>
          </ul></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
--><img src="images/pitcher.jpg"
              width="200"
              height="267"
              hspace="10"
              vspace="1"
              align="top"
              style="float:right;"
              alt="">
          <h4>
            Future socials:
          </h4>
          <ul>
            <?php if(strtotime("2011-07-18") - time() > 0) { ?>
            <li>
              <strong>Adult Social, Saturday, July 18, 7 -
              Midnight</strong>. Food, fun, and music. There is a
              per person fee for this event and advanced
              reservations are required. Please volunteer to help
              make this a great evening!
            </li>
            <?php } ?>
            <?php if(strtotime("2011-07-15") - time() > 0) { ?>
            <li>
              <strong>Fiesta Night, Saturday, August 15, 8 -
              Midnight</strong>. Margaritas and more!
            </li>
            <?php } ?>
            <?php if(strtotime("2011-08-21") - time() > 0) { ?>
            <li>
              <strong>Pool Social, Sunday, August 21, 4 - 8 PM</strong>.
              Share good food with great people on the Virginia Hills Pool
              Snack Bar Deck. Cost is $7 per adult (age 12 and older),
              $4 per child (under age 12)  plus one side dish per family
              (appetizer, salad, mac and cheese, beans, dessert, ???).<br>
              <strong>You must RSVP to <a href="mailto:MSMRZ17377@aol.com">
              Melissa Smrz</a> no later than Tuesday, August 15, 8PM with the
              number of adults and children who will be attending and the
              side dish you will be bringing.  You can pay Melissa by
              check if you see her at the pool, or can pay at the door.
              Date for RSVP is firm, as we need to finalize and pay for
              the Famous Dave’s order early that week….thanks!</strong><br>
              <a href="docs/2011PoolSocialEvent.pdf">Download flyer</a>
            </li>
            <?php } ?>
          </ul>
          <p>
            If you would volunteer to help with this or other
            social events, please contact <a href=
            "mailto:&#106;&#101;&#99;&#115;&#114;&#99;&#64;&#109;&#115;&#110;&#46;&#99;&#111;&#109;">Suzy Coffey</a>,
            (703) 329-9271.
          </p>
          <p>&nbsp;</p>
</div>
<?php include_once "footer.inc"; ?>
