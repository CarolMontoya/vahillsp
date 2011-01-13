<?php
  global $siteTitle;
  $siteTitle = "Pool Renovation 2008-09";
  include_once "header.inc"; 
?>
<!-- Make this one page wider to accomodate large construction plans -->
<style> 
#doc {
  margin:auto;text-align:left; /* leave unchanged */
  width:81.5385em;/* 1060px non-IE */
  *width:79.5002em;/* 1060px IE */
  min-width:600px;/* optional but recommended */
}
</style>
<div class="rounded">
          <h2>
            Pool Renovation 2008-09
          </h2>
          <p>
            The image below represents a proposal for a major
            renovation for the pool. <a href=
            "project.php">Photos of construction updates</a> are
            posted regularly. Send comments to the <a href=
            "mailto:&#112;&#114;&#101;&#115;&#105;&#100;&#101;&#110;&#116;&#64;&#118;&#97;&#104;&#105;&#108;&#108;&#115;&#112;&#111;&#111;&#108;&#46;&#111;&#114;&#103;"><strong>President</strong></a>.
          </p>
          <p>
            <img src="images/ConceptDrawing.jpg"
               width="947"
               height="1523"
               alt="Construction plans for new pool">
          </p>
</div>
<?php include_once "footer.inc"; ?>
