<?php
  session_start();

      $name="";
      $mob_no="";
      $tele_no="";
      $id=0;
      $edit_state=false;
require('dbconfig/config.php');


// if 
    if(isset($_POST['OK'])){
      $name=$_POST['name'];
      $mob_no=$_POST['mob_no'];
      $tele_no=$_POST['tele_no'];

       $query="select * from contacts where name='$name'";
                  $query_run=mysqli_query($conn,$query);

                   if (mysqli_num_rows($query_run)>0) {
                     # code...
                      echo "<script type='text/javascript'>alert('There already exist a Contact with the name $name.......Try Another name');</script>";//already exists
                  }
                  else{
                     $query="insert into contacts (name,mob_no,tele_no) values ('$name','$mob_no','$tele_no')";
      mysqli_query($conn,$query);
      $_SESSION['msg']="Contact saved";
      header('location:record.php');
                  }
     
    }

    //u

    if (isset($_POST['update'])) {
      # code...
    
      $name=($_POST['name']);
      $mob_no=($_POST['mob_no']);
      $tele_no=($_POST['tele_no']);
      $id=($_POST['id']);


                  

      mysqli_query($conn,"update contacts SET name='$name' ,mob_no='$mob_no' ,tele_no='$tele_no' where id='$id'");
      $_SESSION['msg']="Details Updated";
      header('location:record.php');

    }

    //del


    if (isset($_GET['del'])) {

      $id=$_GET['del'];
      mysqli_query($conn,"delete from contacts where id =$id");
      $_SESSION['msg']="Contact Deleted";
      header('location:record.php');
      # code...
    }
    //ret

    $results=mysqli_query($conn,"select * from contacts");


    //only searches
   
     
     
      # code...
    

   
    ?> 