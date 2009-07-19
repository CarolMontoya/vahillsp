<?php ob_start() ?>
<?php 
if ($_GET['randomId'] != "zk5tRyN8u3wzgqN7Ck9EALhpIDgBO1TSgqlPE5lK7X7gqE08Fz6GtYKHz9igy4XrSv9QseHILcdSKb_8GE0M5o5BcaypXIFL3Ht5XF5mLsRtbUfT16zvK2U145wmRz2M1PNNi6zT0OSGEv2xaphypnx4ozF3NkIecyw8g9of8ymxGXCJUklu1_chOv6Jul4v5xp5i_2dETEiVr8SuBiQJe3gfotEX62VUqd6wOzv4iu_NpW_0lkYOtLAHSmISoTE") {
	echo "Access Denied";
	exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing vahillspool.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">
<script language="javascript">
<!--//
// this function updates the code in the textarea and then closes this window
function do_save() {
	var code =  htmlCode.getCode();
	document.open();
	document.write("<html><form METHOD=POST name=mform action='http://67.15.113.20:2082/frontend/x2/files/savehtmlfile.html'><input type=hidden name=dir value='/home/vahillsp/public_html'><input type=hidden name=file value='vahillspool.html'>Saving ....<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><textarea name=page rows=1 cols=1></textarea></form></html>");
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write("<html><form METHOD=POST name=mform action='http://67.15.113.20:2082/frontend/x2/files/aborthtmlfile.html'><input type=hidden name=dir value='/home/vahillsp/public_html'><input type=hidden name=file value='vahillspool.html'>Aborting Edit ....</form></html>");
	document.close();
	document.mform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/home/vahillsp/public_html/WysiwygPro/editor_files/config.php');
include_once ('/home/vahillsp/public_html/WysiwygPro/editor_files/editor_class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

// add a custom save button:
$editor->addbutton('Save', 'before:print', 'do_save();', WP_WEB_DIRECTORY.'images/save.gif', 22, 22, 'undo');

// add a custom cancel button:
$editor->addbutton('Cancel', 'before:print', 'do_abort();', WP_WEB_DIRECTORY.'images/cancel.gif', 22, 22, 'undo');

$body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0027)http://www.vahillspool.org/ -->
<HTML xhtml? 1999 www.w3.org xmlns_?http:><HEAD>
<META http-equiv=Content-Type content="text/html; charset=windows-1252"><!--insert content between quotes in next 2 tags--><!-- saved from url=(0037)http://www.vahillspool.org/index.html --><!--Designed by Zenny L. Logue --><!--Created April 04, 2004 --><!-- Last updated -->
<META content="Virginia HillsSwim Club" name=DESCRIPTION>
<META content="virginia, swim, club, pool, tidal, wave" name=KEYWORDS>
<META content="MSHTML 6.00.2800.1400" name=GENERATOR></HEAD>
<BODY bgColor=#ffffff><!-- Beginning of header -->
<CENTER>&nbsp;&nbsp;&nbsp; <FONT face=times color=red 
size=5><STRONG><I>Welcome To </I></STRONG></CENTER></FONT>
<CENTER> <FONT face=times color=blue size=6><STRONG><I>VIRGINIA HILLS POOL </I></STRONG></CENTER></FONT>
<CENTER><FONT size=2>P.O. Box 10233, Alexandria, VA 22310 </CENTER></FONT>
<P> 
<CENTER><A href="mailto:info@vahillspool.org">Contact Us </A></CENTER>
<HR COLOR="red" SIZE="2" noshade>
<CENTER><A href="http://www.vahillspool.org/membership.html">Membership </A> |  <A 
href="http://www.vahillspool.org/activitiez.html">Events </A>| <A 
href="http://www.vahillspool.org/swim_team.html">Swim Team </A> |  <A href="http://www.vahillspool.org/board.html">Board Members </A>| <A 
href="http://www.vahillspool.org/directions.html">Directions &amp; Location 
</A>| <A href="http://www.vahillspool.org/rentals.html">Rentals &amp; Parties 
</A>| <A href="http://www.vahillspool.org/communities.html">Communities Served 
</A>| <A href="http://www.vahillspool.org/renovations.html">Renovations 
</A></CENTER>
<HR COLOR="red" SIZE="2" noshade>
<CENTER> <A href="http://216.122.31.237/index_files/page0008.htm"> PayPal </A> | <A href="http://www.vahillspool.org/swimlessons.pdf"> Swim Lessons </A> | <A href="http://www.vahillspool.org/Membership_form.pdf"> Membership Form </A> </CENTER>
<HR COLOR="red" SIZE="2" noshade>
<!-- End of header -->

<P><TD WIDTH="100%" VALIGN="TOP" ALIGN="LEFT">
<CENTER <blockquote> <img SRC="pool1.jpg" ALT="The pool, looking toward the back" height=288 width=400><BR>
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Welcome to the new <I><B>Virginia Hills Pool.</I></B> Nestled in 
  the heart of the Virginia Hills community, the <I><B>Virginia Hills Pool 
  </I></B>provides a unique environment surrounded by rolling hills, shaded 
  green space, and the wooded backdrop of Lee District Park. This setting 
  provides a tranquil recreational atmosphere and a great place to have fun in the 
  summer. We have a wide range of activities for adults, families and children. 
</BLOCKQUOTE>
<P>
<CENTER><FONT face=times color=blue size=3><B>GENERAL INFORMATION 
</B></FONT></CENTER>
<BLOCKQUOTE> <B>Location</B>  
  <P>Located at 6500 Robinson Drive. Robinson Drive is a short street off 
  Dorset Drive. Dorset Drive runs from Telegraph Road to Berkshire Drive in 
  the Virginia Hills Community of Lee District, Fairfax County. For more detailed 
  directions, click <A href="http://www.vahillspool.org/directions.html"> here. </A> 
  <P> <B>Hours of Operation (2004 Season) </B>
  <P><B>From May 29 to June 18 (end of Fairfax County School 
  Year)</B><BR>Weekends: &nbsp;&nbsp;&nbsp;&nbsp; Noon until 8 p.m.<BR>Weekdays: 
  &nbsp;&nbsp;&nbsp;&nbsp; 4 p.m. until 8 p.m. 
  <P><B>June 19 to September 6</B><BR>Weekends: &nbsp;&nbsp;&nbsp;&nbsp; Noon 
  until 8 p.m.<BR>Weekdays: &nbsp;&nbsp;&nbsp;&nbsp; Noon until 8 p.m., except 
  Wednesdays in July and August <BR>Wednesdays: &nbsp;&nbsp;Noon until 9 p.m. 
  for Raft Nights (July and August only)<BR>
  <P><B>Phone Numbers</B> 
  <P>Pool Information and to leave requests for information: 703-317-5900 
  <BR>Guard Shack (during operating hours): 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  703-960-9717<BR>
  <P>E-mail address: <A 
  href="mailto:info@vahillspool.org">mailto:info@vahillspool.org</A></BLOCKQUOTE></CENTER>
<P>
<HR color=red noShade SIZE=4>
<CENTER>
<FONT size=-1>June 24, 2004 </FONT><BR><FONT size=-1>
Contact <A href="mailto:nanayzl@aol.com"> webmaster </A>with corrections or problems. <BR>
<FONT size=-1>The website is hosted by <A HREF="http://www.WBA-arch.com"> Wisnewski Blair &amp Associates. Ltd. </A> courtesy of John Kemper.</FONT><BR><FONT size=-1></A>
</CENTER>
</FONT><BR></CENTER></BODY></HTML>
';

$editor->set_code($body);

// add a spacer:
$editor->addspacer('', 'after:cancel');

// print the editor to the browser:
$editor->print_editor('100%',450);

?>
</div>
</body>
</html>
<?php ob_end_flush() ?>
