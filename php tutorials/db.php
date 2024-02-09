<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }
$sql = "create table if not exists student (
    roll INT(6) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    class VARCHAR(10),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
  echo "table created successfully<br>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

function generateRandomString($length) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}
$class = array('1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th','11th','12th');
$index=rand(0, 12-1);
$stclass=$class[$index];
$str= generateRandomString(6);
$sql="insert into student (firstname,lastname,class) values ('$str','$str','$stclass')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
$offsetvalue=71;
$sql = "select * from student limit 10 offset $offsetvalue";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "Roll Number: " . $row["roll"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " is study in class ". $row["class"]. " and registered on the date ". $row['reg_date'] ."<br>";
    }
  } else {
    echo "0 results";
  }
  echo "<br>";
  echo "List of students whose class is 10th<br>";
  $sql = "select * from student where class='10th'";
  $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "Roll Number: " . $row["roll"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " is study in class ". $row["class"]. " and registered on the date ". $row['reg_date'] ."<br>";
    }
  } else {
    echo "0 results";
  }
mysqli_close($conn);

?>