<?php header("Location: ../index.php");


$servername = "mysqldb";
$username = "aristocrat";
$password = "test";
$dbname = "simple";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userID = mysqli_real_escape_string($conn, $_REQUEST['userID']);
$Name = mysqli_real_escape_string($conn, $_REQUEST['Name']);
$Description = mysqli_real_escape_string($conn, $_REQUEST['Description']);

$sql = "INSERT INTO identification (userID, Name, Description) VALUES ('$userID', '$Name', '$Description')";
$result = $conn->query($sql);

if(mysqli_query($conn, $sql)){
  echo "Record added successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

?>
