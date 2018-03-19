<?php
	
	session_start();
	 if(isset($_SESSION['uid']))
	 {
	 	header('location: admin/admindash.php');

	 }

?>



<!DOCTYPE HTML>  
<html>

    <head>
        <meta charset="utf-8">
        <title>Student Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>


    	 <div class="container">
			   <div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-danger">
							  <div class="panel-heading text-center"><h1>Admin Login</h1></div>
							  <!-- <div class="panel-body text-center" align="right" style="margin-right:20px" >take the quiz and  judge your knowledge </div> -->
						</div>
					</div>
			    </div>
			</div>

			<br>
			<br>

 		<div class="container">
 			<div class="row">
 				<div class="col-sm-3"></div>
			    <div class="col-sm-6">
	    	  <form role="form" action="login.php" method="post">
				<div class="form-group">
				  <label for="uname">Username:</label>
				  <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Username">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password">
				</div>
				<button type="submit" class="btn btn-default" name="login">Login</button>
			  </form>
		     </div>	
		     <div class="col-sm-3"></div>
	      </div>
      </div>







 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
    </html>

    <?php
    	include('dbcon.php');
    	if(isset($_POST['login']))
    	{
    		$username=$_POST['uname'];
    		$password=$_POST['pass'];

    		$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    		$run = mysqli_query($con, $qry);

	    	$row = mysqli_num_rows($run);

	    	if($row <1)
	    	{
	    		?>
	    		<script>
	    		alert('Username or Password not match !!');
	    		window.open('login.php','_self');

	    		</script>
	    		<?php
	    	}
	    	else
	    	{
	    		$data=mysqli_fetch_assoc($run);
	    		$id=$data['id'];
	    		echo "id=".$id;


	    		session_start();
	    		$_SESSION['uid']=$id; //now redirect to admin/admindash.php
	    		header('location: admin/admindash.php');



	    	}
	    }


    ?>