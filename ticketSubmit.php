<?php
 
  // Change this to your connection info.
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'logindb';
  // Try and connect using the info above.
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
   
  // Taking all 5 values from the form data(input)
  $first_name =  $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $gender =  $_REQUEST['gender'];
  $address = $_REQUEST['address'];
  $email = $_REQUEST['email'];
   
  // Performing insert query execution
  // here our table name is prizeone
  $sql = "INSERT INTO prizeone  VALUES ('$first_name',
      '$last_name','$gender','$address','$email')";
   
  if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully."
          . " Please browse your localhost php my admin"
          . " to view the updated data</h3>";

      echo nl2br("\n$first_name");
  } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
  }
   
  // Close connection
  mysqli_close($conn);








// log in to each server 

// try {
//   $db = new PDO('mysql:dbname=databasename;host=127.0.0.1', 'username', 'password');
// } catch (PDOException $ex) {
//   echo 'Connection failed: ' . $ex->getMessage();
// }

// $result = $db->query("select * from tablename");
// foreach ($result as $row) {
//   echo $row['foo'] . "\n";
// }

// $stmt = $db->prepare("select * from tablename where id = :id");
// $stmt->execute(array(':id' => 42));
// $row = $stmt->fetch();


// try {
//   $db1 = new PDO('mysql:dbname=databas1;host=127.0.0.1', 'username', 'password');
//   $db2 = new PDO('mysql:dbname=databas2;host=127.0.0.1', 'username', 'password');
// } catch (PDOException $ex) {
//   echo 'Connection failed: ' . $ex->getMessage();
// }


// If local count = 0 do not submit to database
// If local count < 0 submit to database

// counter0 = database0
// counter1 = database1


?>