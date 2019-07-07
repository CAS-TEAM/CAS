<?php

session_start();

session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta charset = "utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<meta name="google-signin-client_id" content="444425785443-5mh44gn88jrf46t217t7i4m62r4ui1ro.apps.googleusercontent.com">
	<!--Enter yout OAuth Client ID in the content attribute -->

	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>

	<script type="text/javascript">
	
	
  	function signOut() {
    	var auth2 = gapi.auth2.getAuthInstance();
    	auth2.signOut().then(function () {
	      	alert('User signed out.');
	      	document.location.href = 'index.php';
    	});
  	}
   	function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
        
      });
    }

    signOut();

	</script>

	<!-- <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> -->

<?php

header("LOCATION: index.php");

?>

</body>
</html>