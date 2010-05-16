<!-- 
  Not really the cleanest thing to do, putting the JavaScript right here,
  but it's logically the place for it since it deals with the menu structure,
  so it's staying here for now. ToDo: figure out whether this should go in its
  own script file.
-->
<script type="text/javascript">
  $(document).ready(function(){
    var links = $("ul#nav-short li a");
    var currLoc = String(this.location);
    for (i = 0; i < links.length; i++) {
      if (currLoc.substr(currLoc.length - 1, 1) == "/") {
        var $currentLink = links.eq(i);
        $currentLink.addClass("current");
        break;
      }
      if (links[i].toString().indexOf(currLoc,0) != -1) {
        var $currentLink = links.eq(i);
        $currentLink.addClass("current");
        break;
      }
    }
  });
</script>

<div class="rounded bubbles nav-short">
  <ul id="nav-short">
    <li><a href="/index.php"><div>Home</div></a></li>
    <li><a href="/location.php"><div>Location</div></a></li>
    <li><a href="/schedule.php"><div>Hours &amp; Events</div></a></li>
    <li><a href="/membership.php"><div>Membership &amp; Fees</div></a></li>
    <li><a href="/swim-team.php"><div>Swim Team</div></a></li>
    <li><a href="/board.php"><div>Board</div></a></li>
    <li><a href="/rentals.php"><div>Rentals &amp; Parties</div></a></li>
    <li><a href="/project.php"><div>2009 Construction</div></a></li>
    <li><a href="/2010Calendar.pdf" target="_new"><div>2010 Calendar</div></a></li>
    <li><a href="http://blog.vahillspool.org/"><div>Tidal Wave Blog</div></a></li>
  </ul>
</div> 
