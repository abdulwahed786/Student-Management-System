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
  <h2 style="text-align: center;">UPDATE STUDENT DETAILS</h2>
  <!-- <p>select the student you want to update</p> -->

  
  <div class="row">
   	<div class="col-sm-3"></div>
		<div class="col-sm-6">
  <form class="form-group" method="post" action="deletestudent.php">
		<div  class="form-group">
			<label for="sel1">Select year:</label>
			<select class="form-control" id="sel1" name="standerd">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			</select>
			<br>
		
					      
	      <div class="col-sm-10">          
	        <input type="text" class="form-control" id="name" placeholder="name" name="stuname" required>
	      </div>
	    

	    <br>
	    <br>

	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	      </div>
	  </div>



  </form>
</div>
<div class="col-sm-3"></div>
</div>
</div>

<br>
<br>
<br>

<table align="center" width="60%" border="1" style="text-align: center;marg 10px;">
	<tr style="background: #000; color: #fff; text-align: center;">
		<td>No</td>
		<td>Image</td>
		<td>Name</td>
		<td>RollNo</td>
		<td>EDIT</td>
	</tr>

<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');

		$std=$_POST['standerd'];
		$name=$_POST['stuname'];


		$sql="SELECT * FROM `student` WHERE `standerd`='$std' AND `name` LIKE '%$name%'";
	
	$run = mysqli_query($con, $sql);

	if(mysqli_num_rows($run)<1)
      	{
      		echo "<tr><td colspan='5'>No records Found</td></tr>";
      	}
      	else
      	{
      		$count=0;
      		while($data=mysqli_fetch_assoc($run))
      		{
      			$count++;
      			?>
      			<tr>
		      			<td> <?php echo $count;?>  </td>
						<td> <img src="../dataimg/<?php echo $data['image'] ?> " style="max-width: 100px;"> </td>
						<td> <?php echo  $data['name']  ?> </td>
						<td><?php echo  $data['rollno']  ?> </td>
						<td> <a href="deleteform.php?sid=<?php echo $data['id'];?>">DELETE</a></td>
				</tr>

      			<?php
      		}
      	}
 	}
?>

</table>

