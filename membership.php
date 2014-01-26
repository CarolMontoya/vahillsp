<?php
  global $siteTitle;
  $siteTitle = "Membership";
  include_once "header.inc";
?>
<div class="rounded">
  <div class="yui-g">
    <div class="yui-u first">
        <?php if(strtotime("2011-09-01") - time() > 0) { ?>
          <h2>
            August Share sale
          </h2>
          <p>
            We are again conducting our August Share Sale.
            If you are sitting on the fence on whether
            or not to join the pool, this is a great way to join.
            The sale allows new members to join as of August 1
            for the cost of the share, only.
            Please <a href=
            "mailto:&#105;&#110;&#102;&#111;&#64;&#118;&#97;&#104;&#105;&#108;&#108;&#115;&#112;&#111;&#111;&#108;&#46;&#111;&#114;&#103;">contact our president</a>
            or call (703) 329-2360, and a representative of the
            Membership Committee will answer your questions.
          </p>
        <?php } ?>
          <h2>
            Membership
          </h2>
          <p>
            Membership in the Virginia Hills Club, Inc. is
            competitive with other pool memberships in the area.
            In 2009, the club opened with <a href=
            "plans.php">two new pools</a>. The main pool was
            enlarged, with a diving well, slide, and large shallow
            area; the baby pool got fun new water features.
          </p>
          <p>
            Besides being a member of a great organization, you
            also own a piece of the pool that is appreciating in
            value! We welcome members, both singles and families,
            from any community in the area. We have welcomed
            members from as far away as the City of Alexandria,
            Beulah Street, Lorton and Hayfield. After reviewing
            the information here, please
            <a href=
            "mailto:&#105;&#110;&#102;&#111;&#64;&#118;&#97;&#104;&#105;&#108;&#108;&#115;&#112;&#111;&#111;&#108;&#46;&#111;&#114;&#103;">send a message to us</a>
            or call (703) 329-2360, and a representative of the
            Membership Committee will answer your questions.
          </p>
        </div>
        <div class="yui-u">
          <h2>
            <a href="docs/General Rules and Regulations Virginia Hills Pool.pdf">General Rules and Regulations Virginia Hills Pool</a>
          </h2>
          <img src="images/bigsmile.jpg" width="276" height="191">
        </div>
      </div>
   	  <h2>
        Summary
      </h2>
      <table class="dues">
        <tr>
          <th colspan="2">
            Share Membership (<?php echo date('Y'); ?>)
          </th>
        </tr>
        <tr>
          <td>
            Application Fee (new members):
          </td>
          <td>
            <strong>$50.00</strong>
          </td>
        </tr>
        <tr>
          <td>
            One Time Share Price:
          </td>
          <td>
            <strong>$500.00</strong> (Single or Family)
          </td>
        </tr>
        <tr>
          <td>
            Annual Family Dues:
          </td>
          <td>
            <strong>$550.00</strong>
          </td>
        </tr>
        <tr>
          <td>
            Annual Single Dues:
          </td>
          <td>
            <strong>$295.00</strong>
          </td>
        </tr>
        <tr>
          <th colspan="2">
            Associate Membership (<?php echo date('Y'); ?>)
          </th>
        </tr>
        <tr>
          <td>
            Family or Single:
          </td>
          <td>
            <strong>$790.00</strong>
          </td>
        </tr>
        <tr>
          <td>
            Active Duty Military:
          </td>
          <td>
            <strong>$550.00</strong> (Two Season Maximum)
          </td>
        </tr>
        <tr>
          <td>
            Nanny/Granny
          </td>
          <td>
            <strong>$50</strong>
          </td>
        </tr>
        <tr>
          <td>
            Guest passes
          </td>
          <td>
            <strong>$4.00</strong> or 10 for <strong>$35.00</strong><br>
          </td>
        </tr>
        <tr>
          <td>
            Work fee
          </td>
          <td>
            <strong>$0.00</strong>
          </td>
        </tr>
      </table>
      <p>
        <strong>To join or get more information, please <a href=
        "mailto:&#105;&#110;&#102;&#111;&#64;&#118;&#97;&#104;&#105;&#108;&#108;&#115;&#112;&#111;&#111;&#108;&#46;&#111;&#114;&#103;">write
        to us!</a></strong>
      </p>
      <a name="payment"></a>
      <h2>
        Payment
      </h2>
  	  <p>
        You can pay for your membership or share dues by using one of the buttons below.
        The preferred method is through Intuit. Click the image below and you will be
        taken to the Intuit website to pay.
      </p>
      <p>
        <a class="no-external" href="https://ipn.intuit.com/pay/VirginiaHillsClub">
          <img class="btn-white" src="images/site/img_IPN_logotype.png">
        </a>
      </p>
      <p>
        You may also pay through PayPal. You will be taken to Paypal's website
        where you can pay with your PayPal account or use your debit or credit
        card without a PayPal account.
      </p>
      <table>
        <tr>
          <th style="border:0px;">
            PayPal
          </th style="border:0px;">
        </tr>
        <tr>
          <td class="center" style="border:0px;">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="7N48GC6GPBG52">
              <table>
                <tr><td><input type="hidden" name="on0" value="Membership types">Membership types</td></tr><tr><td><select name="os0">
                <option value="Family Membership">Family Membership $565.00 USD</option>
                <option value="Single Membership">Single Membership $310.00 USD</option>
                <option value="Military Membership">Military Membership $565.00 USD</option>
                <option value="Associate Membership">Associate Membership $805.00 USD</option>
                <option value="10 Guest Passes">10 Guest Passes $35.00 USD</option>
                <option value="Share Purchase">Share Purchase $515.00 USD</option>
                <option value="Application Fee">Application Fee $50.00 USD</option>
                <option value="Nanny/Granny Pass">Nanny/Granny Pass $50.00 USD</option>
                </select> </td></tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </td>
        </tr>
      </table>
      <h4>
        Details
      </h4>
      <h5>
        Share Purchase
      </h5>
      <p>
        The Virginia Hills Club, Inc. is owned by its
        members, who are the shareholders in the Club. To
        become a member, either a family or single, pay a
        one-time fee to purchase a share. The share price
        for the <?php echo date('Y'); ?> season will be <strong>$500</strong>. New
        shareholders can pay this amount all at once, or make
        a down payment on the share and membership dues with
        the balance paid in increments through the Club's easy
        payment plan. Payment can be made by check or credit
        card via Paypal.
      </p>
      <p>
        Shareholders who terminate their membership by
        informing the Club in writing and requesting a
        buy-back are eligible to have 85% of their share
        price returned to them at a time approved by the
        Club's Board.
      </p>
      <h5>
        Seasonal Dues
      </h5>
      <p>
        Shareholders are required to pay membership fees
        before the start of every season. The due date
        for <?php echo date('Y'); ?> fees is <?php echo date('F j, Y', strtotime("first Sunday", mktime(0, 0, 0, 5, 1, date('Y')))); ?>. The membership
        fee for Family Membership in <?php echo date('Y'); ?> is
        <strong>$550</strong>. The membership fee for a
        Single Membership in <?php echo date('Y'); ?> is <strong>$295</strong>. Payments may
        be spaced out in advance of that date. New members
        should also pay seasonal dues. New members whose
        households include extended family members should
        discuss special arrangements with the Membership
        Committee representatives.
      </p>
      <p>
        Two classes of associate (non-shareholding)
        memberships are available: associate and military.
        Associate Members pay a single-season fee of
        <strong>$790</strong> (no share purchase). If you
        anticipate being in the area or using the pool for
        more than one season, however, it makes sense to
        become a shareholder from the beginning. Associate
        membership fees are likely to increase in future
        seasons.
      </p>
      <h5>
        For Active Duty Military Personnel and Diplomats
      </h5>
      <p>
        The Virginia Hills Club also welcomes military
        families, who only may be in our community for a few
        years. The membership fee for an Active Duty Military
        Membership in <?php echo date('Y'); ?> is <strong>$550</strong> (no share
        purchase). This benefit can be used for two consecutive
        seasons. If a duty tour is extended or is expected to
        last for more than two swim seasons, active duty personnel
        are encouraged to consider becoming shareholders.
        Special consideration will be given when such military
        shareholders rotate out of the area.
      </p>
      <h5>
        Nanny/Granny Fee
      </h5>
      <p>
        A dedicated caregiver can be added to a household
        membership for <strong>$50</strong>.
      </p>
      <h5>
        Guest Passes
      </h5>
      <p>
        Guest passes can be purchased for <strong>$4 each or $35 for 10
        passes</strong>.
      </p>
    </div>
    <div class="rounded">
      <h4>
        Communities Served
      </h4>
      <p>
        The Virginia Hills pool draws members from throughout
        the Telegraph Road-Franconia Road-Richmond Highway
        region. There are no official boundaries for the pool
        and we have welcomed members from Alexandria,
        Hayfield, east of Richmond Highway and Beulah Street.
      </p>
      <p>
        Communities served and links to their websites:
      </p>
      <ul>
        <li>
          <a href="http://www.bbhca.org/">Brookland/Bush Hill</a>
        </li>
        <li>Burgundy Farms
        </li>
        <li>Clermont
        </li>
        <li>Hayfield
        </li>
        <li>
          <a href="http://huntingtononline.org/">Huntington</a>
        </li>
        <li>
          <a href= "http://www.lakedevereux.com/">Lake D'evereux</a>
        </li>
        <li>
          <a href="http://www.myrosehill.com">Rose Hill</a>
        </li>
        <li>
          <a href= "http://racewayfarms.org/">Raceway Farms</a>
        </li>
        <li>
          <a href="http://www.stoneybrooke.org">Stoneybrooke</a>
        </li>
        <li>Tartan Village
        </li>
        <li>Vantage
        </li>
        <li>
          <a href="http://deerruncrossing.org/">Deer Run Crossing</a>
        </li>
        <li>
          <a href="http://virginiahills.org/">Virginia Hills</a>
        </li>
        <li>
          <a href= "http://gwwca.org/v1/index.shtml">Wilton Woods</a>
        </li>
        <li>
          <a href="http://www.woodstonehoa.org/">Woodstone</a>
        </li>
      </ul>
</div>
<?php include_once "footer.inc"; ?>
