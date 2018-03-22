<?php
	require 'dbconfig/config.php';	
	?>

	<html>
	<head>
		
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="icon.css">
         
         <link rel="stylesheet" type="text/css" href="Add.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profiledesign.css">
<title>UPDATE</title>

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




        <div class="container">
        <form class="myform" action="Directory_update.php" method="post">

        	<br>

        	<br>
        	<br>
               
               <input type="text" name="name" class="inputvalues" placeholder="ENTER NAME" required="">
               <input type="text" name="mob_no" class="inputvalues" placeholder="UPDATED MOBILE NUMBER" required="">
               <input type="text" name="tele_no" class="inputvalues " placeholder="OTHER CONTACTS" ><br>
               <input type="Submit" name="OK" value="UPDATE" class="btn-login" style="background-color: #333300">
	

        </div> 


			<?php

	



	

	

/*
        if(isset($_POST['OK']))
    {
      $name_updated=$_POST['name'];
      $mob_no_updated=$_POST['mob_no'];
      $tele_no_updated=$_POST['tele_no'];
      


      $query="select * from contacts where name='$name_updated'";
      
          $query_run=mysqli_query($conn,$query);
                    
      
         if (mysqli_num_rows($query_run)<0) {

               echo "<script type='text/javascript'>alert('Contact Does not exist.......');</script>";//already exists

                    }
                    else
                    {   
                       
                       $query="UPDATE contacts SET name='$name_updated',mob_no='$mob_no_updated',tele_no='$tele_no_updated' WHERE name='$name_updated'";
                       $query_run=mysqli_query($conn,$query);
                       if ('query_run') {
                           echo "<script type='text/javascript'>alert('Contact updated');</script>";
                          
                       }
                       else
                        {
                            echo "<script type='text/javascript'>alert('Error');</script>";
                       
                        }
                  

                    }
                
                    
                       }
                    
          
          
         

   */ 

	?>




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
  
  
</div>



</footer>

<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>
	</body>

</html>

	