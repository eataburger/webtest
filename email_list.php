<!DOCTYPE html>
<html>
<head>
<title>Email list</title>
	
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

</head>
<body>
	
<table id="table_id" class="display">
<thead>
<tr>
<th>ID</th>
<th>Email</th>
<th>Date</th>
</tr>
</thead>
<tbody>
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
</tbody>
</table>
<script type="text/javascript">
$(document).ready( function () {
$('#table_id').DataTable();
} );
</script>
</body>
</html>