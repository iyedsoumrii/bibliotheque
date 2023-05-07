<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background:url(../bibliotheque/img/index.jpg)no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		.container a {
			display: block;
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			text-align: center;
			text-decoration: none;
			margin-bottom: 20px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		.container a:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Se connecter en tant que :</h1>
	<div class="container">
		<a href="admin-registration.php">Admin</a>
		<a href="user-registration.php">Client</a>
	</div>
</body>
</html>
