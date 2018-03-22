<?php  include('database.php');

if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$edit_state=true;
	$rec=mysqli_query($conn,"select * from contacts where id='$id'");

	$record=mysqli_fetch_array($rec);
	$name=$record['name'];
	$mob_no=$record['mob_no'];
	$tele_no=$record['tele_no'];
	$id=$record['id'];
}




?>

<!DOCTYPE html>

<html>
<head>
	<title>Updated details</title>
	<link rel="stylesheet" type="text/css" href="recorddesign.css">
</head>
<body>


	<form method ="post"  action="database.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>NAME</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>

		<div class="input-group">
			<label>Mob No</label>
			<input type="text" name="mob_no" value="<?php echo $mob_no; ?>">
		</div>
		
		<div class="input-group">
			<label>Tele NO</label>
			<input type="text" name="tele_no" value="<?php echo $tele_no; ?>">
		</div>
		<div class="input-group">
			<?php if($edit_state==false): ?>
				<button type="submit" name="save" class="btn">Save</button>
			<?php else: ?>
				<button type="submit" name="update" class="btn">Update</button>

			<?php endif ?>
			
		</div>
		
		

	</form>


</body>
</html>