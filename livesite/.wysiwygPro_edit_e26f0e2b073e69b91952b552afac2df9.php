<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "epBeNEUSA4Nq7gz3Nzlyffk5Sj3K7kXZGkNdcEnBeIOJQ7g03TNBIX73UL3LL3KbqWDR9Nsz6gbU9vYKDbPGDaFghv7VANR4UydHB49k0h4hsm88zr6yGTOgyUUnX2ghEV9P77ytaHT265JRoKdNHZ79sacd6vzEwFtc_sDfMorUi42BkF9n3o4g0WWeZj31ac9I_2pNsUDbmmk1Bob0hxQ60A79ZiwxyAeJLxQjOYCF0ZrvdTuQWnlWIesPBSaX") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing rentals.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://vahillspool.org:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://vahillspool.org/">
    <input type="hidden" name="basedir" value="/home/vahillsp/public_html/">
    <input type="hidden" name="udir" value="/home/vahillsp/public_html">
    <input type="hidden" name="ufile" value="rentals.html">
    <input type="hidden" name="dir" value="%2fhome%2fvahillsp%2fpublic_html">
    <input type="hidden" name="file" value="rentals.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://vahillspool.org:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://vahillspool.org/">
    <input type="hidden" name="basedir" value="/home/vahillsp/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fvahillsp%2fpublic_html">
        <input type="hidden" name="file" value="rentals.html">
    <input type="hidden" name="udir" value="/home/vahillsp/public_html">
    <input type="hidden" name="ufile" value="rentals.html">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://vahillspool.org/";

$editor->loadValueFromFile('/home/vahillsp/public_html/rentals.html');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/vahillsp/public_html/';
$editor->mediaURL = 'http://vahillspool.org/';
$editor->imageDir = '/home/vahillsp/public_html/';
$editor->imageURL = 'http://vahillspool.org/';
$editor->documentDir = '/home/vahillsp/public_html/';
$editor->documentURL = 'http://vahillspool.org/';
$editor->emoticonDir = '/home/vahillsp/public_html/.smileys/';
$editor->emoticonURL = 'http://vahillspool.org/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://vahillspool.org/.wysiwygPro_preview_e26f0e2b073e69b91952b552afac2df9.php?randomId=epBeNEUSA4Nq7gz3Nzlyffk5Sj3K7kXZGkNdcEnBeIOJQ7g03TNBIX73UL3LL3KbqWDR9Nsz6gbU9vYKDbPGDaFghv7VANR4UydHB49k0h4hsm88zr6yGTOgyUUnX2ghEV9P77ytaHT265JRoKdNHZ79sacd6vzEwFtc_sDfMorUi42BkF9n3o4g0WWeZj31ac9I_2pNsUDbmmk1Bob0hxQ60A79ZiwxyAeJLxQjOYCF0ZrvdTuQWnlWIesPBSaX';
// print the editor to the browser:
$editor->htmlCharset = 'us-ascii';
$editor->urlFormat = 'relative';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
