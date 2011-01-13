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
      if (links[i].toString() == currLoc) {
        var $currentLink = links.eq(i);
        $currentLink.addClass("current");
        break;
      }
    }
    if (document.getElementsByTagName) {
      var anchors = document.getElementsByTagName("a");
      for (var i=0; i < anchors.length; i++) {
        var anchor = anchors[i];
        if (anchor.getAttribute("href") &&  
            anchor.getAttribute("rel") == "external") {
          anchor.target = "_blank";
        }
      }
    }
  });
</script>

<div class="rounded bubbles nav-short">
  <ul id="nav-short">
    <li><a href="index.php"><span>Home</span></a></li>
    <li><a href="location.php"><span>Location</span></a></li>
    <li><a href="schedule.php"><span>Hours &amp; Events</span></a></li>
    <li class="inactive"><a href="javascript:;" class="inactive"><span class="inactive">2011 Calendar (TBD)</span></a></li>
    <li><a href="membership.php"><span>Membership &amp; Fees</span></a></li>
    <li><a href="members.php"><span class="highlight">Members</span></a></li>
    <li><a href="swim-team.php"><span>Swim Team</span></a></li>
    <li><a href="board.php"><span>Board</span></a></li>
    <li><a href="rentals.php"><span>Rentals &amp; Parties</span></a></li>
    <li><a href="project.php"><span>2009 Construction</span></a></li>
    <li><a href="http://blog.vahillspool.org/"><span>Tidal Wave Blog</span></a></li>
  </ul>
</div> 
