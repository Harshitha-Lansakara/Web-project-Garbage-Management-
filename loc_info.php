<?php
	include_once('db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="css/loc_info.css">
</head>
<body>




	<div class="post-location">
		
		<form method="post" id="text-box" enctype="multipart/form-data">
			<h2 align="center">Detailes!</h2><br>
			<input type="text" name="n1" id="n1" placeholder="Customer Name">
			<br><br>
			<input type="text" name="n2" id="n2" placeholder="city">
			<br><br>
			<div>
				Image :<input type="file" name="image"><br><br>
			</div>
			<input type="text" name="n3" id="n3" placeholder="Emergency Level">
			
			<br><br>
			<input type="text" name="n4" id="n4" placeholder="Contact Number">
			<br><br><br>
			<input type="submit" name="submit" id="next" value="Next">
		</form>
	</div>

<?php

		$db = new mysqli('localhost','root','','demo');

	//add incident
		if(isset($_POST['submit'])){			
			$target = "pic/".basename($_FILES['image']['name']);		
			$image = $_FILES['image']['name'];					
			//$sql = "INSERT INTO details(image) VALUES ('$image')";
			$n1 = $_POST["n1"];
			$n2 = $_POST["n2"];		
			$n3 = $_POST["n3"];
			$n4 = $_POST["n4"];		
		
		$sql = "INSERT INTO details (name,city,image,e_Level,contact_number) VALUES ('$n1','$n2','$image','$n3','$n4')";
			
			mysqli_query($db,$sql);
			move_uploaded_file($_FILES['image']['tmp_name'],$target);			
	}
?>
</body>
</html>