<!DOCTYPE html>
<html>

<head>
	<title>User1</title>
</head>

<body>
	<?php
	session_start();

	if ($_SESSION['role'] == "") {
		header("location:index.php?pesan=gagal");
	}
	?>

	<h1>Halaman User1</h1>

	<p>Halo <?php echo $_SESSION['username']; ?></p>
	<p>Anda telah login sebagai <?php echo $_SESSION['role']; ?></p><br>
	<a href="logout.php">Logout</a>
</body>

</html>