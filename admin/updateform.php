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
	include('titlehead.php');
	include('../dbcon.php');

	$sid=$_GET['sid'];

	$sql="SELECT * FROM `STUDENT` WHERE `id`='$sid'";
	$run = mysqli_query($con, $sql);
	$data=mysqli_fetch_assoc($run);
  ?> 



  <div class="container">
	 <div class="row">
			   	<div class="col-sm-3"></div>
					<div class="col-sm-6">
					  <h2 style="text-align: center;">ADD STUDENT DETAILS</h2>

					  <form class="form-horizontal" method="post" action="updatedata.php" enctype="multipart/form-data">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="rollno">Rollno:</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" id="rollno" value="<?php echo $data['rollno']; ?>" name="rollno" required>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Enter Full Name</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="name" value="<?php echo $data['name']; ?>" name="name" required>
					      </div>
					    </div>
					    
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Enter city</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="city" value="<?php echo $data['city']; ?>" name="city" required>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Parent contact Number</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="pcon" value="<?php echo $data['pcont']; ?>" name="pcon" required>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Standerd</label>
					      <div class="col-sm-10">          
					        <input type="Number" class="form-control" id="std" value="<?php echo $data['standerd']; ?>" name="std" >
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Student's Image</label>
					      <div class="col-sm-10">          
					        <input type="file"  name="simg" >
					      </div>
					    </div>


					    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>

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