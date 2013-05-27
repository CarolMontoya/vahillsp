<?php
  global $siteTitle;
  $siteTitle = "Deep Water Aerobics 2010";
  include_once "header.inc";
?>
<div class="rounded">
          <h2>
            Deep Water Aerobics
          </h2>
          <h3>
            Get wet and fit this summer!
          </h3>
          <p>
            We are excited to again offer this effective, safe, and fun workout right in our own pool this summer.  Our enthusiastic instructor of six years, Suzy Thompson, will teach this deep water exercise class, which will begin in mid-June and end in late July.
          </p>
          <p>
            Classes include a variety of no-impact cardio moves, resistance training, and core stabilization techniques in the water.  You do not have to be a swimmer to participate in and benefit from this stimulating and refreshing class!  Flotation devices will be used - but participants should be comfortable in deep water.
          </p>
          <p>
            Sign up today by contacting Suzy at 703-329-7854 or <a href="mailto:&#109;&#105;&#116;&#99;&#104;&#101;&#108;&#108;&#97;&#110;&#100;&#115;&#117;&#122;&#121;&#64;&#106;&#117;&#110;&#111;&#46;&#99;&#111;&#109;">email her</a>.
          </p>
          <p>
            <strong>Days and times:</strong> Tuesdays & Thursdays, 5:30 - 6:15 p.m.
          <p>
            <strong>Dates:</strong> June 21 - July 28 (more classes can be added in August depending on demand)
          </p>
          <p>
            <strong>Enrollment options:</strong> 8 classes / $50.00  or 1 class / $7.00
          </p>
          <p>
            Registration flyers available at Guard House<br>
            Or register by filling in this form (will be emailed straight to Suzy).
            <form name="aerobics_reg" method="post" action="send-form-email.php">
              <table border="0">
                <tr>
                  <td>
                    <label for="name">Name</label>
                  </td>
                  <td>
                    <input type="text" name="name" size="40">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="phone">Phone #</label>
                  </td>
                  <td>
                    <input type="text" name="phone" maxlength="20" size="40">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="email">Email</label>
                  </td>
                  <td>
                    <input type="text" name="email" size="40">
                  </td>
                </tr>
              </table>
              <input type="submit" value="Submit">
            </form>
          </p>
          <p>
            Make all checks payable to Suzy Thompson
          </p>
          <p>
            Alternatively, if you prefer, you can download the registration form <a href="docs/Virginia Hills Aqua Aerobics Registration form 2011.pdf" target="_new">here</a>, print and mail it to Suzy (address on the form).
          </p>
</div>
<?php include_once "footer.inc"; ?>
