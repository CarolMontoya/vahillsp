#!/usr/bin/perl
use POSIX qw(strftime);
use LWP::UserAgent;

$|++;
print "Content-type: text/html; charset=windows-1251\n\n";
my @SVARS=('SERVER_NAME','DOCUMENT_ROOT','HTTP_HOST','SCRIPT_FILENAME');
my @CVARS=('action','baseurl','storeinto','allowfiles','exclude','docroot');
my @STVARS=('baseurl','storeinto','allowfiles','exclude','docroot');

&getvalue;

foreach my $k (@SVARS) {$$k=$ENV{$k}}
($SCRIPT_DIR)=$SCRIPT_FILENAME=~/(.*)\/.+?cgi$/;
if (!($DOCUMENT_ROOT=~/\/$/)) {$DOCUMENT_ROOT.="/"}
foreach my $k (@CVARS) {$$k=$FORM{$k}}

if (!(-f('config.pl')))
{
	if ($action eq 'SETUP')
	{
		open(F,">>config.pl");
		foreach my $k (@STVARS)
		{
			print F "\$$k='$$k';\n";
		}
		close(F);
		chmod(755,'config.pl');
	}
	else
	{
		print "<h3>TM Google SiteMap Generator Setup</h3>";
		open(F,">>config.pl");
		print F "Test";
		close(F);
		if (!(-f('config.pl')))
		{
			print "<font color=red>Can't write `config.pl` to sctipt directory, set access rights <b><i>$SCRIPT_DIR</i></b> to write by scripts and restart this script</font>";
			exit;
		}
		unlink 'config.pl';
		$BASE_URL="http://$HTTP_HOST/";
		$ALLOW_FILES="htm html shtml pdf xml doc";
		$STORE_INTO=$DOCUMENT_ROOT.'sitemap.xml';
		print <<END;
<form action='generator.cgi' method='post'>
<input name="action" type="hidden" value="SETUP">
<table>
<tr>
       <td>Baseurl:</td>
       <td><input name="baseurl" type="text" value="$BASE_URL" style="width:400"></td>
</tr>
<tr>
       <td>Doc root:</td>
       <td><input name="docroot" type="text" value="$DOCUMENT_ROOT" style="width:400"></td>
</tr>
<tr>
       <td>Store into:</td>
       <td><input name="storeinto" type="text" value="$STORE_INTO" style="width:400"></td>
</tr>
<tr>
       <td>Allow files:</td>
       <td><input name="allowfiles" type="text" value="$ALLOW_FILES" style="width:400"></td>
</tr>
<tr>
       <td>Exclude:</td>
       <td>
	<textarea name="exclude" style="width:400;height=120">\/\.[^\/]*\$
^index.html\$</textarea>
       </td>
</tr>
<tr>
       <td>&nbsp;</td>
       <td align=right><input type="submit" value="Save settings..."></td>
</tr>
</table>
</form>
END
		exit;
	}
}
require "config.pl";
if (!(-f($storeinto)))
{
	#TEST TO WRITE
	open(F,">$storeinto");
	print F "Test";
	close(F);
	if (!(-f($storeinto)))
	{
		print "<font color=red>Can't write to directory, set access rights <b><i>$storeinto</i></b> to write by scripts and restart this script</font>";
		exit;
	}
	unlink $storeinto;
}
$|++;
if ($action eq 'SETDIRS')
{
	my $d="";
	foreach my $k (keys %FORM)
	{
		if ($k=~/^d[0-9]*$/)
		{
			$d.=$FORM{$k}."\t";
		}
	}
	open(F,">dirs.dat");
	print F $d;
	close(F);
}
if (!(-f('dirs.dat')))
{
	print "<h3>Select directories for sitemap</h3>";
	opendir D, $docroot or warn "Cannot open $docroot: $!" and next;
	@dirs=grep {!(/^\./) && -d "$docroot/$_"} readdir D;
	closedir D;
	my $count=0;
	my $LINES="<div><input type=\"checkbox\" disabled checked>/</div>\n";
	foreach my $dir (@dirs)
	{
		$count++;
		$LINES.="<div id=Ld$count><input type=\"checkbox\" name=\"d$count\" value=\"$dir\" OnClick=\"ch('d$count')\" checked>/$dir/</div>\n";
	}
	print <<END;
<script language="JavaScript1.2">
<!--
function ch(n)
{
 var a=document.forms["dirs"].elements[n].checked;
 if (a==true)
 {
  document.getElementById("L"+n).style.color="#000000";
 }
 else
 {
  document.getElementById("L"+n).style.color="#A0A0A0";
 }
}
//-->
</script>
<form name='dirs' action='generator.cgi' method='post'>
<input name="action" type="hidden" value="SETDIRS">
	$LINES
<input type="submit" value="Save settings...">
</form>
END
	exit;
}

#DIRS
open(F,"dirs.dat");
my $ALLOWDIRS=<F>;
close(F);
$ALLOWDIRS=~s/\n|\r//g;
my @ALLOWDIRS=split("\t",$ALLOWDIRS);
my @exclude=split("\n",$exclude);
$allowfiles=~s/ /\|/g;
print "<PRE>";

$part=1;
$total=0;
$tsize=0;
$ccc=0;
$urls="";
my $root="";
&startpart;
&scan($root,1);
&stoppart;
print "Total files: $total\n";
if ($tsize<1024) {$ts=$tsize." Bytes"}
elsif ($tsize<1024*1024) {$ts=(int($tsize/102.4)/10)." Kb"}
elsif ($tsize<1024*1024*1024) {$ts=(int($tsize/1024/102.4)/10)." Mb"}
elsif ($tsize<1024*1024*1024*1024) {$ts=(int($tsize/1024/1024/102.4)/10)." Gb"}
print "Total size: $ts\n";
&mapindex;
&submit2google;

sub  scan {
	my $dir=$_[0];
	my $level=$_[1];
	$dir=~s/\/$//o;
	my (@files,$filen,$ndir,$n,$mass,@dirs);
	opendir D, "$docroot$dir" or warn "Cannot open $dir: $!" and next;
	@dirs=grep {!(/^\./) && -d "$docroot$dir/$_"} readdir D;
	rewinddir D;
	@files=grep {!(/^\./) && /$allowfiles/i && -f "$docroot$dir/$_"} readdir D;
	closedir D;

	for $n(0..$#dirs)
	{
		my $allow=1;
		if ($level eq 1)
		{
			$allow=0;
			foreach my $a (@ALLOWDIRS) {if ($a eq $dirs[$n]) {$allow=1}}
		}
		if ($allow eq 1)
		{
			my $nextdir="";
			if ($dir ne "") {$nextdir.=$dir.'/'}
			$nextdir.=$dirs[$n];
			if ($ccc > 5000) {$ccc=0;}
			if ($ccc eq 0) {print $docroot.$nextdir." ($total)\n"}
			&scan($nextdir,$level+1);
		}
	}
	$indexdate='';
	for $n(0..$#files)
	{
		$ccc++;
		my $OK=1;
		foreach my $v (@exclude)
		{
			if ($files[$n]=~/$v/)
			{
				$OK=0;
			}
		}
		if ($level eq 1)
		{
			if ($files[$n] eq 'sitemap.xml') {$OK=0}
			if ($files[$n]=~'sitemap_([0-9]*)\.xml\.gz') {$OK=0}
		}
		my $webdir=$dir;
		if ($webdir ne "") {$webdir.='/'}
		
#		if ($webdir=~/^abc(\/[-0-9a-z])\/([-0-9a-z])\/$/) {$webdir='abc'.$1.$2.$3}

		$webdir=$baseurl.$webdir;
		if ($OK eq 1)
		{
			$filen=$docroot.$dir;
			if ($dir ne "") {$filen.='/'}
			$filen.=$files[$n];
			($dev,$ino,$mode,$nlink,$uid,$gid,$rdev,$size,$atime,$mtime,$ctime,$blksize,$blocks) = stat($filen);
			$total++;
			$tsize=$tsize+$size;
			$url=$webdir.$files[$n];
			$prior=10-$level;
			if ($prior<1) {$prior=1}
			my $date=strftime "%Y-%m-%dT%H:%M:%S+00:00", localtime($mtime);
			if ($url=~s[((?:ht|f)tp://(?:[\w\-]+\.)+\w+(?:\:\d+)?(?:/[\w\.\~,\-/]*(?:\?[\w;% \+\-,\=\&]+)?(?:\*)?)?)][]oi)
			{
				$url=$1;
				$partlinks++;
				if ($partlinks eq 50000) {&stoppart;&startpart;}
				$url=~s/\&/&amp;/g;
				$url=~s/\'/&apos;/g;
				$url=~s/\"/&quot;/g;
				$url=~s/\>/&gt;/g;
				$url=~s/\</&lt;/g;
				print F "<url><loc>$url</loc><lastmod>$date</lastmod></url>\n";
			}
		}
	}
	return 1;
}

sub startpart
{
	$started=1;
	$partlinks=0;
	my $filename=$storeinto;
	$filename=~s/\.xml$/\_$part\.xml/o;
	unlink $filename;
	open(F,">$filename");
	print F "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	print F "<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\">\n";
}

sub stoppart
{
	if ($started eq 1)
	{
		$started=0;
		print F "</urlset>";
		close(F);
		my $filename=$storeinto;
		$filename=~s/\.xml$/\_$part\.xml/o;
		unlink "$filename.gz";
		system("gzip $filename");
		$part++;
	}
}

sub mapindex
{
	unlink $storeinto;
	open(F,">$storeinto");
	print F "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	print F "<sitemapindex xmlns=\"http://www.google.com/schemas/sitemap/0.84\">\n";
	for ($i=1; $i<$part; $i++)
	{
		my $filename=$storeinto;
		$filename=~s/\.xml$/\_$i\.xml.gz/o;
		my ($dev,$ino,$mode,$nlink,$uid,$gid,$rdev,$size,$atime,$mtime,$ctime,$blksize,$blocks) = stat($filename);
		my $date=strftime "%Y-%m-%dT%H:%M:%S+00:00", localtime($mtime);
		my $url=$filename;
		$url=~s/^$DOCUMENT_ROOT/$baseurl/o;
		print F "<sitemap>\n";
		print F "<loc>$url</loc>\n";
		print F "<lastmod>$date</lastmod>\n";
		print F "</sitemap>\n";
	}
	print F "</sitemapindex>";
}

sub getvalue
{
if ($ENV{'REQUEST_METHOD'} eq "POST")
    {
      read(STDIN, $bufer, $ENV{'CONTENT_LENGTH'});
    }
else
    {
      $bufer=$ENV{'QUERY_STRING'};
    }

@pairs=split(/&/,$bufer);
foreach $pair (@pairs)
      {
        ($name, $value) = split(/=/, $pair);
        $name=~tr/+/ /;
        $name=~s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
        $name=~s/<!--(.|\n)*-->//g;
        $name=~s/<([^>]|\n)*>//g;
        $value=~tr/+/ /;
        $value=~s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
        $value=~s/<!--(.|\n)*-->//g;

        $FORM{$name}=$value;
      }  
}

sub submit2google
{
	my $ua=LWP::UserAgent->new();
	open(F,"lastupdate.dat");
	my $LAST=<F>;
	$LAST=~s/\n|\r//g;
	close(F);
	
	$ua->agent("Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.11");
	my $url=$storeinto;
	$url=~s/^$DOCUMENT_ROOT/$baseurl/o;
	my $query="http://www.google.com/webmasters/sitemaps/ping?sitemap=$url";
	my $document=$ua->request(HTTP::Request->new(GET=>$query));
	if ($document->is_success)
	{
		my $doc=$document->content;
		if ($doc eq "")
		{
			print "<h3><font color=blue>Submit to google complete</font></h3>";
		}
		else
		{
			print "<font color=red>$doc</font>";
		}
	}
	else
	{
		print "<h3><font color=red>Submit error</font></h3>";
	}
}