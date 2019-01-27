<?php

	$con = mysqli_connect('localhost','root','','data');
	if (!$con){
		echo "No connection";
	}

	if(isset($_POST['submit1'])){

			$name = $_POST['user_name'];
			$pass = $_POST['password'];

			$qy = "insert into signup (name,password) values ('$name' , '$pass')";
			mysqli_query($con , $qy);
			echo ('<script type="text/javascript">alert("Run")</script>');
			
	}
	if(isset($_POST['submit2'])){
		$name2 = $_POST['uname'];
		$pass2 = $_POST['pword'];


			$select = "select * from signup where username = '$name2' and password = '$pass2'";
			$result = mysqli_query($con , $select); 

			$row = mysqli_fetch_array($result);
				if($row['name'] == $uname2 || ['password'] == $pword2){
					header("Location: user-map.php");
				}else{
					echo "Faild !!"; 
				}
	}			

  ?>