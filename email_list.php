<!DOCTYPE html>
<html>
<head>
<title>Email list</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #4066A5;
font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
font-size: 20px;
text-align: left;
}
th {
background-color: #4066A5;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>Email</th>
<th>Date</th>
</tr>
<?php
$con = mysqli_connect("localhost", "root", "", "email");
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT id, email, date FROM list ORDER BY email";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["date"]. "</td></tr>";
}
echo "</table>";
} else { echo "The database is empty"; }
$con->close();
?>
</table>
</body>
</html>