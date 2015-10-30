<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="styles.css">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>

<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '520486288114362',
      xfbml      : true,
      version    : 'v2.5'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
			function onLogin(response) {
		  if (response.status == 'connected') {
			FB.api('/me?fields=first_name,user-id', function(data) {
			  var welcomeBlock = document.getElementById('name');
			  welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
			  
			  console.log(data.user-id + " = user ID");
			  console.log("hello");
			});
			FB.api("...?fields={fieldname_of_type_ProfilePictureSource}",
			function (response) {
				if (response && !response.error) {
					console.log("img/"+ response.fieldname_of_type_ProfilePictureSource);
				}
			});
		  }
		}

		FB.getLoginStatus(function(response) {
		  // Check login status on load, and if the user is
		  // already logged in, go directly to the welcome message.
		  if (response.status == 'connected') {
			onLogin(response);
		  } else {
			// Otherwise, show Login dialog first.
			FB.login(function(response) {
			  onLogin(response);
			}, {scope: 'user_friends, email'});
		  }
		});
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="navbar">
	<div id="navcontainer">
		<img src="img/logo.png" id="logo"/>
		<img src="img/mouse.png" id="mouse"/>
	</div>
</div>


<div id="toolbar">
<h2 id="raised">Raised : £100, 000</h2>
<div id="toolbarright">
	<strong id="name">Name here</strong>
	<img src="img/settings.png" id="settings"/>
	<img id="profile"/>
</div>

</div>
<div id="content">
<div class="content_left">
	<ul class="btn_list">
		<li><a href="updates.html" class="nav_btn">Updates</a></li>
		<li><a href="profile.html"  class="nav_btn">Profile</a></li>
		<li><a href="support.html"  class="nav_btn">Support</a></li>
		<div class="fb-share-button" data-href="https://app.facebook.com/macmillancompanion" data-layout="button"></div>
	</ul>
	<div class="btn_list">
	<ul style="width:100%;">
	<li><a href="events.html"  class="nav_btn">Events</a></li>
	<li><a href="contact.html"  class="nav_btn">Contact</a></li>
	<li><a href="donate.html"  class="nav_btn">Donate</a></li>
	</ul>
	</div>
</div>
<div style="float:right" class="content_right">
	<a class="twitter-timeline" style="width:200px;" href="https://twitter.com/macmillancancer" data-widget-id="659481360818675716">Tweets by @macmillancancer</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>

</body>
</html>
