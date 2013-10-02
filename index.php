<?php  include('dbconf.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Send Free SMS Without Registration. No registration required to send Free SMS. Send free sms worldwide, Send Free SMS online</title>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/style.css" />
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
<div class="header"><a href="index.php"><img src="images/free-sms-portal.png" alt="Send Free SMS Without Registration - Free SMS Portal"></a></div>
<div class="wrapper">
  <div class="intro"><strong>Send Free SMS Without registration</strong>. Our world wide coverage ensures your message get delivered instantly. Spread smile, <strong>send free sms worldwide</strong>.
    Send unlimited free sms anywhere in the world for free. <strong>Send Free SMS online</strong> without the need of pulling out your cellphone. SMS is the fastest way to stay in touch with family and friends around the world. Its free, simple and instant. In our mission to make instant communication simple and free. &nbsp;&nbsp;<a href="whyus.php">Read More &raquo;</a></div>
  <div class="tabbedContent" id="homeTab">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Send SMS</a></li>
      <li><a href="chat-room.php">Chat</a>
      <!--<li style="float:right;"><a href="#settings" data-toggle="tab">Report Abuse</a></li> -->
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="home">
        <div class="leftClm col-md-5">
          <div class="app" id="app">
            <form action="" method="post" id="appform">
              <table border="0" align="center">
                <tr>
                </tr>
                <tr>
                  <td><input type="text" name="mobile" placeholder="Mobile Number" /></td>
                </tr>
                <tr>
                  <td><input type="hidden" name="reqid" value="1" />
                    <textarea name="message" placeholder="Enter Your Message Here" ></textarea></td>
                </tr>
                <tr>
                  <td><a href="" style="margin:10px 0 0 0;" class="btn btn-success" id="sendsms"><i class="icon-share icon-white"></i>&nbsp;&nbsp;Send SMS</a></td>
                </tr>
              </table>
            </form>
            <div id="loader" class="loader"><img src="images/ajax-loader.gif" alt="Sending SMS..."></div>
          </div>
          <div class="clearFix"></div>
          <div class="aboutus"><strong>FreeSMSPortal</strong> is a non-profit website run by a group of individuals with a mission to keep online communication simple and free. Send Free SMS without registration.</div>
          <div class="aboutus">
            <p style="color:#6699CC; font-size:14px;"> Help Us Spread The Word</p>
            <div class="fb-like" data-href="http://www.freesmsportal.com" data-send="false" data-width="250" data-show-faces="true"></div>
          </div>
        </div>
        <div class="smsviews" id="smsviews"> </div>
      </div>
      <div class="tab-pane" id="profile">
        <p>Not getting the exact words to express? Well, it happens. Let us help you. Select any categor below and get tons of SMS message. Its Free!</p>
        <ul>
          <li>Love SMS</li>
          <li>Shayari SMS</li>
          <li>Friendship SMS</li>
          <li>Funny SMS</li>
        </ul>
      </div>
    </div>
  </div>  
  <div class="clearFix copy"> &copy;Copyright 2013. All Rights Reserved. <br/>
    Use of this website is subjected to <a href="terms.php">Terms &amp; Conditions</a> </div>
</div>
<script>
	document.getElementById('appform').reset();
</script>
<!-- <script src="js/jquery-1.10.2.min.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<!-- FaceBook Likes -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
