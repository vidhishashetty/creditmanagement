<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="D:\bootstrap-4.3.1-dist\css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#r1{
		font-weight: bold;
		font-size: 20px;
	}
</style>

 	 <script type="text/javascript">
 	$(document).ready(function(){
  $("button").click(function(){
    $("#display").load("viewuser.php");
  });
});
 </script>
<div id="display">
 <table class="table table-hover table-bordered">
 		<tr id=r1><td>user_id</td><td>name</td><td>email</td><td>current_credit</td><td>Action</td></tr>
<?php 
	include_once 'include/dbh.cm.php';             //connect to database
	 $sql="SELECT * FROM `user`;";
       $result=mysqli_query($conn,$sql);
       $resultCheck=mysqli_num_rows($result);//calute no 
	if($resultCheck>0){
       	while($row=mysqli_fetch_array($result)){   //
   ?>
   <tr>
   	 <td>
   	 	<?php 
            echo $row['user_id'];
   	 	?>
    </td>
   	 <td><?php echo $row['name'];?></td>
   	 <td><?php echo $row['email'];?></td>
   	 <td><?php echo $row['current_credit'];?></td>
   	 <td><form method="post" action="transfer.html"><input type="submit" name="butt1" value="tansfer" class="btn btn-primary"></form></td>
   </tr>
<?php } 
}?>

</table>
</div>
</body>
</html>

       
