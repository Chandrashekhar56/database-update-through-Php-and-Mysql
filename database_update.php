<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post" action="database_update.php">
			Enter empid
			<input type="text" name="x" />
			<br>
			<br>
			<input type="submit" value="update">
			<input type="reset" value="reset">
		</form>
</body>
</html>
<?php
		if(isset($_POST['x']))
		{
			$db=mysqli_connect('localhost','root','','employee');
			$a=$_POST['x'];
			$update="update A set salary=salary +(salary*15)/100 where empid=$a";
			$update_query=mysqli_query($db,$update);
			if($update_query)
				echo "update successfuly";
			else
				echo "not updated";
		}
?>