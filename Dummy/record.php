<?php include ('database.php');

//fetch the records 

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
	<title>Display</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="icon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

         
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profiledesign.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="recorddesign.css">
</head>
<body>


         <nav class="navbar navbar-light" style="background-color: rgb(0,0,0);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img id="icon" src="logo8.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homepage.php">Home</a></li>
        <li><a href="actionlogin.php">Activity</a></li>
  -     <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homePage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



<br>



<div class=" w3-center w3-animate-fading w3-xxxlarge">
  <b><h1 style="color: rgb(0,0,0);font-weight:bolder;"> PRESS EDIT TO UPDATE YOUR CONTACTS HERE AND PRESS DELETE TO REMOVE THE CONTACTS </h1></b>
  </div>


<br>
























	<?php if (isset($_SESSION['msg'])): ?> 
<div class="msg">
	<?php
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		?>
</div>
<?php endif ?>

	<table>
		<thead>
			<tr>
			<th>Name</th>
			<th>Mobile No</th>
			<th>Oher Contacts</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row= mysqli_fetch_array($results)) {?>
			<tr>
		<td><?php echo $row['name'] ?></td>
		<td><?php echo $row['mob_no'] ?></td>
		<td><?php echo $row['tele_no']?></td>
		<td >
			<a class="edit_btn" href="record.php?edit=<?php echo $row['id']; ?>">Edit</a>
		</td>

		<td >
			<a class="del_btn" href="database.php?del=<?php echo $row['id']; ?>">Delete</a>
		</td>
		</tr>

	<?php	}?>

		
	</tbody>
			
		
	</table>

	<a class="bck_btn" href="actionlogin.php">GO Back<-</a>


	<br>	<br>	

<div class=" w3-center w3-animate-fading w3-xxxlarge">
  <b><h1 style="color: rgb(0,0,0);font-weight:bolder;">UPDATE YOUR CONTACTS HERE </h1></b>
  </div>

  	


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



<br>
<br>
<br>
<br>
<br>

<footer class="text-center" style="background-color: rgb(0,0,0);">
  <a class="up-arrow" href="homePage.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Copyright @<a href="vesit.ac.in" data-toggle="tooltip" title="Visit vesit.ac.in">vesit.ac.in</a></p> 
  
  
  

  
  <p>Vivekanand Education Society Institute Of Technology</p>
  <a href="#"><i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>











</body>
</html>