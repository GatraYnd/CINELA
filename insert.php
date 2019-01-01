<?php 
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($username) || !empty($email) || !empty($password) ) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "registration";

		$conn = new mysqli($host, $Username, $dbPassword, $dbname);
			die{'Connect Error('. mysqli_connect_errno'().')'. mysqli_connect_error());
		} else {
			$SELECT = "SELECT email From register Where email = ? Limit 1";
			$INSERT = "INSERT Into register (username, password, password) values(?,?,?)";

			$stmt = $coon->prepare($SELECT),
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0) {
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssii", $username, $email, $password);
				$stmt->execute();
				echo "New record inserted sucessfully";

			} else {
				echo "Someone already register using this email";
			}
			$stmt->close();
			$conn->close();
		}


	} else {
		echo "All field are required";
		die();
	}
?>