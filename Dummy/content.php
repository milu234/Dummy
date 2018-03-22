
<!DOCTYPE html>
<html>
<head>
	<title>User Detail</title>
</head>
<body>
<table border="1">
	<tr>
		<th width="120">username</th>
		<th width="120">Contact No</th>
		<th>TELEPHOE NO</th>
	</tr>
	<?php
require 'dbconfig/config.php';
$sql=mysqli_query($conn,"select * from contacts ");
	while ($data=mysqli_fetch_row($sql)) {

		echo '

		<tr>
		<td>'.$name.'</td>
		<td>'.$mob_no.'</td>
		<td>'.$tele_no.'</td>
		</tr>

		';
}
?>
</table><a href="UserReport_Export.php">EXPORT To Excel
</a>

</body>
</html>





	
		
	
