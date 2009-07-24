<!-- 
  Not really the cleanest thing to do, putting the JavaScript right here,
  but it's logically the place for it since it deal with the menu structure,
  so it's staying here for now.
-->
<script type="text/javascript">
  $(document).ready(function(){
    var links = $("ul#nav li a");
    for (i = 0; i < links.length; i++) {
      if (links[i].toString().indexOf(this.location,0) != -1) {
        var $currentLink = links.eq(i)
        $currentLink.addClass("current");
      }
    }
  });
</script>
<div class="rounded bubbles nav">
  <ul id="nav">
    <li><a href="index.php"><div>Home</div></a></li>
    <li><a href="location.php"><div>Location</div></a></li>
    <li><a href="schedule.php"><div>Hours &amp; Events</div></a></li>
    <li><a href="membership.php"><div>Membership &amp; Fees</div></a></li>
    <li><a href="swim-team.php"><div>Swim Team</div></a></li>
    <li><a href="board.php"><div>Board</div></a></li>
    <li><a href="rentals.php"><div>Rentals &amp; Parties</div></a></li>
  </ul>
</div> 
