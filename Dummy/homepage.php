<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Palace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="carousel.css">
  <link rel="stylesheet" type="text/css" href="icon.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profiledesign.css">
  <body>

    <nav class="navbar navbar-light" style="background-color: rgb(0,0,0);" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></icon3
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage.php"><img id="icon" src="logo8.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
  -     <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>

<br>
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
     <div class="carousel-inner">
      <div class="item active">
        <img src="slide0.jpg"  style="width: 100%" >
        <div  class="carousel-caption">
          <h2>Inventions That Changed the way of communications</h2>
        </div>
      </div>

      <div class="item">
        <img src="slide3.jpg"  width="30" height="30">
        <div class="carousel-caption">
          <h2>Communication is a beautiful essensce of life</h2>
        </div>
      </div>
    
      <div class="item">
        <img src="slide2.jpg" alt="New york" width="30" height="30">
        <div class="carousel-caption">
          <h2>Talking is the only mode of Communication to Express Yourself</h2>
        </div>
      </div>
    </div>

    



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" >
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h1><b>What We Do</b></h1><br>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <img src="addcontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Add a new contact </h1></p>
    </div>
    <div class="row">
    <div class="col-sm-3">
      <img src="updatecontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Update a new contact </h1></p>
    </div>
     <div class="row">
    <div class="col-sm-3">
      <img src="Deletecontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Delete an existing contact</h1></p>
    </div>
    <div class="row">
    <div class="col-sm-3">
      <img src="searchcontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Search a contact</h1></p>
    </div>
  </div>
  <br>  <br>  <br>  <br>  <br>  <br>

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