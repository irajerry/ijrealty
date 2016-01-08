<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8"> 
<title>Student Demo Page</title>
<meta name="description" content="A longer description of the page's contents." />
</head>

<body>
<h2>Student Demo Page</h2>
<hr />
<?php
  include('database-connect.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,name,email,url,added FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["id"]. $row["name"]. $row["website"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>
<hr />
</body>
</html>
