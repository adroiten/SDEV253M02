<?php $pictures = array('pic1.png', 'pic2.png', 'pic3.png'); 
shuffle($pictures); 
?> 

<!DOCTYPE html>
	<html> 
		<head> 
			<title>Bob's Auto Parts</title> 
		</head> 
		<body> 
			<hl>Bob's Auto Parts</hl> 
				<div align="center"> 
				<table style="width: 100%; border: 0"> 
					<tr> 
					<?php 
					for ($i = 0; $i < 3; $i++) {
						echo "<td style=\"width: 33%; text-align: center\"> 
						<img src=\"";
						echo $pictures[$i]; 
						echo "\"/></td>"; 
					} 
					?>
					</tr>
				</table>
				</div>
		</body>
	</html>
