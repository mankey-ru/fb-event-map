<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>fb-event-map</title>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId            : 1199103630269512, // https://developers.facebook.com/apps/1199103630269512/dashboard/
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v3.3'
			});
			FB.login(function(response) {
				if (response.authResponse) {
					console.log('Welcome!  Fetching your information.... ');
					FB.api('/me', function(response) {
						console.log('Good to see you, ' + response.name + '.');
					});
				}
				else {
					console.log('User cancelled login or did not fully authorize.');
				}
			});
		};
	</script>
	<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
</head>
<body>
	deploy test
</body>
</html>