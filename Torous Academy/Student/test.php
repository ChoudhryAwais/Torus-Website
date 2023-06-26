<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (!empty($_POST['test'])) 
		{
			$name = $_POST['fname'];
			echo $name;
		}
		else
			
	?>

	<form action="test.php" method="post">
	<?php
		echo '
		  <input type ="text" name="fname" placeholder="Student Father Name">
		  <input type = "submit"> 
		  <input type = "hidden" name="test" value="true">
		';
	?>
	</form>
</body>
</html>
