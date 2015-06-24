<html>
<head>
	<meta charset="utf-8" />
	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<title>Your Application Details</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/default.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="p_wrapper">
		<h1 class="blue_title details">
			Your Application Details
		</h1>
			<ul class="my_details">
				<?php
					if (!empty($_POST)) {
						// Get Post Parameters From Request
						$fullname = $_POST["fullname"];
						$phone = $_POST["phone"];
						$email = $_POST["mail"];
						$country = $_POST["country"];
						echo '<li class="step_phrase">Full Name:  '.$fullname.'</li>';
						echo '<li class="step_phrase">Phone:  '.$phone.'</li>';
						echo '<li class="step_phrase">E-mail:  '.$email.'</li>';
						echo '<li class="step_phrase">Country:  '.$country.'</li>';
					}
				?>
			</ul>

	</div>
</body>
</html>

