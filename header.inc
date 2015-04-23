<?php
  include_once "../vahillspool.conf.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta name="generator" content=
    "HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">
    <title>
      <?php echo $siteTitle; ?> - Virginia Hills Pool, Alexandria, VA
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="geo.position" content="38.76639;-77.114311">
    <meta name="geo.placename" content="Alexandria, Virginia, United States">
    <meta name="geo.region" content="us-va">
    <meta name="ICBM" content="38.76639;-77.114311">
    <meta name="google-site-verification" content="oWVHaIbsW3g_HyzkSiUBJT6v3sHc2ECLIO9LSN0zhIE" />
    <meta name="norton-safeweb-site-verification" content="kzkyduq87z5w-7xqrpk5rpx31-zg1hxp09r1vx890d6qro0wj6scttsvsiy3d-1w6fsx85mnicnvh-qicmkrnlh8mqijtw3x2msw-c64g92o6ny9xnx51ozcvdgbor6-" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="/images/site/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/images/site/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/images/site/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/images/site/apple-touch-icon-ipad-retina.png" />
    <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $root; ?>/css/vahillspool.min.css" type="text/css" media="screen" />
    <!-- <script type="text/JavaScript" src="<?php echo $root; ?>/js/curvycorners.js"></script> -->
    <script type="text/JavaScript" src="<?php echo $root; ?>/js/jquery.js"></script>
    <!-- Google Chrome Frame check -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>

    <!-- Google Analytics -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-9635197-1']);
      _gaq.push(['_setDomainName', 'vahillspool.org']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_trackPageLoadTime']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <script>
        var _prum = [['id', '51cd8004abe53d3b0e000000'],
	             ['mark', 'firstbyte', (new Date()).getTime()]];
        (function() {
            var s = document.getElementsByTagName('script')[0]
              , p = document.createElement('script');
            p.async = 'async';
            p.src = '//rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
    </script>
    <!-- Google Plus badge -->
    <script type="text/javascript">
      window.___gcfg = {lang: 'en'};
      (function()
      {var po = document.createElement("script");
      po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(po, s);
      })();
    </script>
    <!-- Google Chrome Frame -->
    <script type="text/javascript">
      $(document).ready(function() {
        CFInstall.check({
          mode: "overlay"
        });
      });
    </script>
    <!-- UserVoice -->
    <script>
      // Include the UserVoice JavaScript SDK (only needed once on a page)
      UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/8RQnnzQVopeBvLdhKRDF4A.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();

      //
      // UserVoice Javascript SDK developer documentation:
      // https://www.uservoice.com/o/javascript-sdk
      //

      // Set colors
      UserVoice.push(['set', {
        accent_color: '#448dd6',
        trigger_color: 'white',
        trigger_background_color: 'rgba(46, 49, 51, 0.6)'
      }]);

      // Identify the user and pass traits
      // To enable, replace sample data with actual user traits and uncomment the line
      UserVoice.push(['identify', {
        //email:      'john.doe@example.com', // User’s email address
        //name:       'John Doe', // User’s real name
        //created_at: 1364406966, // Unix timestamp for the date the user signed up
        //id:         123, // Optional: Unique id of the user (if set, this should not change)
        //type:       'Owner', // Optional: segment your users by type
        //account: {
        //  id:           123, // Optional: associate multiple users with a single account
        //  name:         'Acme, Co.', // Account name
        //  created_at:   1364406966, // Unix timestamp for the date the account was created
        //  monthly_rate: 9.99, // Decimal; monthly rate of the account
        //  ltv:          1495.00, // Decimal; lifetime value of the account
        //  plan:         'Enhanced' // Plan name for the account
        //}
      }]);

      // Add default trigger to the bottom-right corner of the window:
      UserVoice.push(['addTrigger', { mode: 'contact', trigger_position: 'bottom-right' }]);

      // Or, use your own custom trigger:
      //UserVoice.push(['addTrigger', '#id', { mode: 'contact' }]);

      // Autoprompt for Satisfaction and SmartVote (only displayed under certain conditions)
      UserVoice.push(['autoprompt', {}]);
      </script>
  </head>
  <body>
    <div id="doc" class="yui-t2">
      <div id="hd">
        <div class="rounded">
          <?php if(strtotime("2012-05-28") - time() > 0) { ?>
          <iframe style="position:relative; float:right; margin-bottom:-80px;" src="http://free.timeanddate.com/countdown/i32vfl79/n263/cf12/cm0/cu4/ct0/cs1/ca0/co1/cr0/ss1/cac333/cpc333/pct/tcfff/fs100/szw448/szh189/tatPool%20Opening%20in%3A/tac333/tptPool%20is%20open!/tpc333/iso2012-05-26T12:00:00/bac333/pa5" frameborder="0" width="219" height="77"></iframe>
          <?php } ?>
          <a href="index.php">
          <img src="<?php echo $root; ?>/images/header.png" width="800" height="159"
            alt="Virginia Hills Pool Home">
          </a>
        </div>
      </div>
      <div id="bd">
        <div class="yui-b">
          <?php include_once "navigation.inc"; ?>
        </div>
        <div id="yui-main">
          <div class="yui-b">
