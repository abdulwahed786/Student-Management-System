<?php
	
	function showdetails($standerd,$rollno)
	{
		include('dbcon.php');
		$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd';  ";

		$run=mysqli_query($con,$sql);

		if(mysqli_num_rows($run)>0)
		{

			$data=mysqli_fetch_assoc($run);
			?>
				<table border="1" style="width: 50%; margin-top: 20px; margin-bottom: 50px; text-align: center; " align="center">
					<tr>
						<th colspan="3" style="text-align: center;"><h3>Student Details</h3></th>
					</tr>
					<tr>
						<td rowspan="5"><img style="max-height:150px; max-width: 120px; border: 2px solid black; " src="dataimg/<?php echo $data['image']?>"/></td>

					</tr>
					<tr>
						<th>Name</th>
						<td> <?php echo $data['name']; ?></td>
					</tr>
					<tr>
						<th>Standerd</th>
						<td> <?php echo $data['standerd']; ?></td>
					</tr>
					<tr>
						<th>Parents Contact Number</th>
						<td> <?php echo $data['pcont']; ?></td>
					</tr>
					<tr>
						<th>city</th>
						<td> <?php echo $data['city']; ?></td>
					</tr>

				</table>


			<?php

		}
		else
		{
			echo "<script>alert('No Students Found');</script> ";
		}
	}


?>