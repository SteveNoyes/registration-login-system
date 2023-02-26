<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
  
	<body class="loggedin">

		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
        <a href="raffle.php"><i class="fa-solid fa-ticket"></i>Raffle</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
      <div class="homeDash">
  			<h3>Hello, <?=$_SESSION['name']?>!</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure iste quidem ab optio numquam odio? Fugiat, nisi sapiente ullam nam quisquam possimus eaque tempora quasi, doloribus cupiditate vel, dolore facilis.</p>
      </div>
		</div>

	</body>
</html>