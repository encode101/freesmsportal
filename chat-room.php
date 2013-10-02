<?php include('dbconf.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Send Free SMS Without Registration. No registration required to send Free SMS. Send free sms worldwide, Send Free SMS online</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/chat.css" />
<!-- Google Analytics API -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17169016-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div class="header">
 <a href="index.php"><img src="images/free-sms-portal.png" alt="Send Free SMS Without Registration - Free SMS Portal"></a>
</div>
<div class="wrapper">
  <div class="chatApp" id="chatApp">
  	<div class="listing" id="listing">
    	<div id="chatContent">
        	<ul id="chatlist">
            </ul>
        </div>
    </div>
    <div class="chatbar">
    <form id="chatapp">
    	<input type="text" name="chatmessage" class="hugeText" id="sendchat" placeholder="Say Something!"/>
        <input type="hidden" name="reqid" value="1" />
        <input type="button" class="btn btn-primary" id="postChat" value="Post" />
    </form>
    </div>
  </div>
  <div class="clearFix copy" style="display:none;"> &copy;Copyright 2013. All Rights Reserved. <br/>
    Use of this website is subjected to <a href="terms.php">Terms &amp; Conditions</a> </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/chatroom.js"></script>
</body>
</html>
