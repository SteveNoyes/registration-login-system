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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

		<title>Home Page</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
	</head>
  
	<body class="loggedin">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewbox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
    </svg>
    <?php include('nav.php') ?>
		<div class="content">
      <div class="homeDash pt-5 pb-5">
  			<h3>Hello, <?=$_SESSION['name']?>!</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure iste quidem ab optio numquam odio? Fugiat, nisi sapiente ullam nam quisquam possimus eaque tempora quasi, doloribus cupiditate vel, dolore facilis.</p>
      </div>
      <div class="homeDash pt-5 pb-5">
  			<h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure iste quidem ab optio numquam odio? Fugiat, nisi sapiente ullam nam quisquam possimus eaque tempora quasi, doloribus cupiditate vel, dolore facilis.</p>
  			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi sapiente minima tenetur error pariatur cupiditate. Tempora natus nesciunt id officia inventore laboriosam, aspernatur dolore molestiae voluptatem impedit velit est voluptates ullam cum minus quae. Voluptas libero ullam totam error ipsum.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure iste quidem ab optio numquam odio? Fugiat, nisi sapiente ullam nam quisquam possimus eaque tempora quasi, doloribus cupiditate vel, dolore facilis.</p>
      </div>
		</div>
    <?php include('footer.php') ?>
	</body>
</html>