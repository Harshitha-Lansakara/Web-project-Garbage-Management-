<?php
	include_once('db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class='active1'>
	
<?php 
	$sqlget = "SELECT * FROM details";
	$sqldata = mysqli_query($connection,$sqlget) or die('Error while getting');	
?>
		<?php
			if(mysqli_num_rows($sqldata) > 0){
				while($row = mysqli_fetch_array($sqldata)){	
		?>					
		<div>
			<table>
				<tr>
					<td>
						<div>
							<?php 
								echo("<img style='width:100px; height:100px;' src='pic/".$row['image']."'>"); 
							?>
						</div>
					</td>
					<td>
						<div style='marging:0px; padding:0px; top:0px; right:0px;'>
							<?php 	echo($row['id'] . "<br>"); 
									echo($row['name'] . "<br>"); 
									echo($row['city'] . "<br> "); 
									echo($row['e_Level'] . "<br> ");
									echo($row['contact_number'] . "<br> ");
							?>
						</div>						
					</td>
				</tr>
			</table>
		</div>
		<hr>
		<?php
				}
			}
		?>
		
	
</div>	
	
</body>
</html>