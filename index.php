<!DOCTYPE HTML>  
<html>

    <head>
        <meta charset="utf-8">
        <title>Student Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

		 <style>
		.bg-4 { 
		    background-color: #2f2f2f;
		    color: #ffffff;
		    position: fixed;
		    width: 100%;
		    bottom: 0px;
		}
        </style>
    </head>

    <body>
    	
    	
    	

		    <div class="container">
			   <div class="row">
					<div class="col-sm-12">
						 <div class="panel panel-danger">
							  <div class="panel-heading text-center"><h1>Welcome to Student Management System</h1></div>
							  <!-- <div class="panel-body text-center" align="right" style="margin-right:20px" >take the quiz and  judge your knowledge </div> -->
						</div>
					</div>
			    </div>
			</div>


			<h3 align="right" style="margin-right:20px"><a href="login.php">Admin Login</a></h3>

			<br>
				


		         <div class="container">
					   <div class="row">
					   	<div class="col-sm-4"></div>

							<div class="col-sm-4">
										  <div class="panel panel-success">
											  <div class="panel-heading text-center"> Student Information </div>
										  </div>


									      <form class="form-horizontal" method="post" action="index.php" >	
									    			<div class="form-group">
												      <label for="sel1">Choose year:</label>
												      <select class="form-control" name="std" id="sel1">
												            <option value="1">1st</option>
									    					<option value="2">2nd</option>
									    					<option value="3" selected="selected">3rd</option>
									    					<option value="4">4th</option>
												      </select>
												    </div>
												    
									    		
									    			 <div class="form-group">
												      <label  for="rollno">Rollno:</label>
												        <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno" required>
												    </div>

									    	       <br>

									    	       <div class="form-group" >        
												      <div class="col-sm-offset-4 col-sm-10">
												        <button  type="submit" class="btn btn-primary btn-lg" name="submit">Show Info</button>
												      </div>
												    </div>

									    	</form>
									    </div>
									</div>
								</div>



		<footer class="container-fluid bg-4 text-center">
		  <p>Made By <a href="https://abdulwahed786.github.io/" target="_blank">Abdul Wahed</a></p> 
		</footer>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
    </html>

    <?php

    	if(isset($_POST['submit']))
    	{
    		$standerd= $_POST['std'];
    		$rollno= $_POST['rollno'];

    		include('dbcon.php');
    		include('function.php');

    		showdetails($standerd,$rollno);
    	}

    ?>