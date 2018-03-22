
<?php
      require 'dbconfig/config.php';

                          
  

		$sql=mysqli_query($conn,"select * from contacts ");
		echo "<table border=0>
		<tr>
		<th>Name</th>
		<th>Mobiile</th>
		<th>Telephone NO</th>
		</tr>";
	while ($data=mysqli_fetch_row($sql)) {
		echo "<form action=mydata3.php method=post";
		echo "<tr>";

		echo "<td>"."<input type =text name=name value=".$data[0]."></td>" ;
		echo "<td>"."<input type =text name=mob_no value=".$data[1]."></td>" ;
		echo "<td>"."<input type =text name=tele_no value=".$data[2]."></td>" ;
		echo "<td>"."<input type =submit name=submit value=update"."></td>" ;
		
		echo "<tr>";


		echo "</form>";


	}
		echo "</table>";




        if(isset($_POST['submit']))
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
                    
          
          
         



		      
		?>
		

		



		
	
		
	
