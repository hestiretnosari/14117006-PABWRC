<!DOCTYPE html>
<html>

<head>
	<title>Tugas Prak 9</title>
</head>

<body>
	<h1>Login</h1>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div>
		<p>Silahkan login</p>
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username .." required="required">

			<label>Password</label>
			<input type="password" name="password" placeholder="Password .." required="required">

			<input type="submit" class="submit" value="LOGIN">
		</form>
	</div>
</body>

</html>