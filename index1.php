<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="styles.css">

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
			FB.api('/me?fields=first_name', function(data) {
			  var welcomeBlock = document.getElementById('fb-welcome');
			  welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
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

<h1 id="fb-welcome">eat shit</h1>

<div id=navbar">
<img src="img/logo.png" id="logo"/>
<img src="img/mouse.png id="logo"/>
</div>

<div id="toolbar">
<h2 id="raised">Raised : £100, 000</h2>
<h2 id="name">Name here</h2>
<img src="img/settings.png" id="settings"/>
<img id="profile"/>


</div>

<a class="twitter-timeline" href="https://twitter.com/macmillancancer" data-widget-id="659481360818675716">Tweets by @macmillancancer</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</body>
</html>
