<?php
	
	session_start();
	
	  if(isset($_SESSION['uid']))
	  {
	  	echo " ";
	  }
	  else
	  {
	  	 header('location: ../login.php');
	  }


	include('header.php');
	include('titlehead.php')
  ?> 



<div class="container">
	 <div class="row">
			   	<div class="col-sm-3"></div>
					<div class="col-sm-6">
					  <h2 style="text-align: center;">ADD STUDENT DETAILS</h2>

					  <form class="form-horizontal" method="post" action="addstudent.php" enctype="multipart/form-data">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="rollno">Rollno:</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno" required>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Enter Full Name</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
					      </div>
					    </div>
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Enter city</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="city" placeholder="city" name="city" required>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Parent contact Number</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="pcon" placeholder="Parent contact Number" name="pcon" required>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Standerd</label>
					      <div class="col-sm-10">          
					        <input type="Number" class="form-control" id="std" placeholder="Standerd" name="std" >
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Student's Image</label>
					      <div class="col-sm-10">          
					        <input type="file"  name="simg" >
					      </div>
					    </div>


					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-default" name="submit">Submit</button>
					      </div>
					    </div>

					  </form>
					</div>
			<div class="col-sm-3"></div>
		</div>
	</div>

</body>
</html>

<?php

      if(isset($_POST['submit']))
      {	

      	include('../dbcon.php');
      	$rolno= $_POST['rollno'];
      	$name= $_POST['name'];
      	$city= $_POST['city'];
      	$pcon= $_POST['pcon'];
      	$std= $_POST['std'];
      	$imgname= $_FILES['simg']['name'];
      	$tempname= $_FILES['simg']['tmp_name'];

      	move_uploaded_file($tempname,"../dataimg/$imgname");

      	 $qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd` , `image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imgname')";
  		
    	$run = mysqli_query($con, $qry);


      	if($run == true)
      	{
      		?>
      		<script>
      			alert("data inserted succesfully .");
      		</script>
      		<?php

      	}
      }

?>