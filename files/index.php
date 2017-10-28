<!DOCTYPE html>
<html>
<head> This is a simple DB query test </head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<form action="insert.php" method="post">
    <p>
        <label for="userID">User ID:</label>
        <input type="text" name="userID" id="userID">
    </p>
    <p>
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name">
    </p>
    <p>
        <label for="Description">Description:</label>
        <input type="text" name="Description" id="Description">
    </p>
    <input type="submit" value="Submit">
</form>

<?php
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

$sql = "SELECT userID, Name, Description FROM identification";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Description</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["userID"]. "</td><td>" . $row["Name"]. "</td><td> " . $row["Description"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
