<?php
if(isset($_POST['text1']))
{
$con = mysqli_connect('localhost', 'root', '','email');

$text1 = $_POST['text1'];

$sql = "INSERT INTO `list` (`id`, `email`, `date`) VALUES (NULL, '$text1', current_timestamp())";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Email placed in database";
}
}
else
{
	echo "Error";
	
}
?>
