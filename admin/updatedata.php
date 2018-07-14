<?php
include('../dbcon.php');
      	$rolno= $_POST['rollno'];
      	$name= $_POST['name'];
      	$city= $_POST['city'];
      	$pcon= $_POST['pcon'];
      	$std= $_POST['std'];
      	$imgname= $_FILES['simg']['name'];
      	$tempname= $_FILES['simg']['tmp_name'];

        $id=$_POST['sid'];

      	move_uploaded_file($tempname,"../dataimg/$imgname");

      	 $qry="UPDATE `student` SET `rollno`='$rolno', `name`='$name', `city`='$city', `pcont`='$pcon', `standerd`='$std' , `image`='$imgname' WHERE `id`='$id';   ";
  		
    	$run = mysqli_query($con, $qry);


      	if($run == true)
      	{
      		?>
      		<script>
      			alert("data updated succesfully .");
            window.open('updateform.php?sid=<?php echo $id; ?>','_self');
      		</script>
      		<?php

      	}

?>        