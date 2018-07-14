<?php
	
	session_start();
	
	  if(isset($_SESSION['uid']))
	  {
	  	// echo $_SESSION['uid'];
	  }
	  else
	  {
	  	 header('location: ../login.php');
	  }

?>

<?php
	include('header.php');
  ?> 
  


     <body>
     	
		 <style>
		.bg-4 { 
		    background-color: #2f2f2f;
		    color: #ffffff;
		    position: fixed;
		    width: 100%;
		    bottom: 0px;
		}
        </style>
    	 	
     	<div class="admintitle">
     		
     		<h4><a href="logout.php" style="float:right; margin-right: 30px; color: #fff; font-size: 20px;">logout</a></h4>
     		<h1>Welcome To Admin Dashboard</h1>
     	</div>

     	 <br>
		 <br>
		 <br>
		 <br>


     	<div class="container">
			   <div class="row">
			   	<div class="col-sm-3"></div>
					<div class="col-sm-6">
						 <div class="panel panel-danger">
							  <div class="panel-heading text-center"><a href="addstudent.php"><h2>Insert Student</h2></a></div>
							  <br>
							  <br>
							  <div class="panel-heading text-center"><a href="updatestudent.php"><h2>update Student</h2></a></div>
							  <br>
							  <br>
							  <div class="panel-heading text-center"><a href="deletestudent.php"><h2>delete Student</h2></a></div>
							 
						</div>
					</div>
				<div class="col-sm-3"></div>
			 </div>
		</div>

<footer class="container-fluid bg-4 text-center">
		  <p>Made By <a href="https://abdulwahed786.github.io/" target="_blank">Abdul Wahed</a></p> 
		</footer>

    </body>
    </html>


    