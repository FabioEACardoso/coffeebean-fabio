<!DOCTYPE html>
<html lang="pt-br">
  <head>
	  <script>
	  (function() {
			if (typeof(window.socialid) !== "object") window.socialid = {};

			socialid.onLoad = function() {
				socialid.login.init(359, {loginType: "event"});
				socialid.login.renderLoginWidget("login-c6ab6f67",
					{"providers":["facebook","gplus","twitter","linkedin"],"theme":"bricks","showSocialIdLink":true}
				);

				socialid.events.onLoginSuccess.addHandler(function (data) {
					window.location.href = "/logado.php?token="+data.token;
				});
			};



			var e = document.createElement('script');   e.type = 'text/javascript';   e.id = 'socialid_api_script';   if (document.location.protocol === 'https:') {     e.src = 'https://staging.socialidnow.com/assets/api/socialid.js';   } else {     e.src = 'http://staging.socialidnow.com/assets/api/socialid.js';   }   var s = document.getElementsByTagName('script')[0];   s.parentNode.insertBefore(e, s);
		})();
			
		</script> 
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
		<p>Login através das redes sociais:</p>
  	<div id='login-c6ab6f67' style='display: inline-block; padding: 5px'></div> 

  </body>
</html>