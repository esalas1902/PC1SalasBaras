<!DOCTYPE html>

 <html>
 <body>
 <div name="top" align="center">
 	<img src="images/top.jpg" width="850" height="200"/>
 </div>
 <div name="middle" align="center">
 
 <table>
 
	<tr>
		<th style="font-size:24px;" align="left">For data scientists</th>
		<th style="font-size:24px;" align="left">For IT professionals</th>
	</tr>
 
 <tr>
 
<td> 
<table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<?php
			while($row=$result->fetch_assoc()){
				if(($row['codigo_servicio']=='0001') || ($row['codigo_servicio']=='0002') || ($row['codigo_servicio']=='0003')){
				?>
				<tr width="310" height="110">
					<td width="100"><img src="<?php echo $row['imagen_servicio']?>"/></td>
					<td width="400"><?php echo "<b>".$row['nombre_servicio']."</b>"."<br><br>".$row['descripcion_servicio']."<br>"?></td>
				</tr>
		
				<?php
				}
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
</td>	  

<td>
<table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<?php
			while($row=$result->fetch_assoc()){
				if(($row['codigo_servicio']=='0004') || ($row['codigo_servicio']=='0005') || ($row['codigo_servicio']=='0006')){
				?>
				<tr width="310" height="110">
					<td width="100"><img src="<?php echo $row['imagen_servicio']?>"/></td>
					<td width="400"><?php echo "<b>".$row['nombre_servicio']."</b>"."<br><br>".$row['descripcion_servicio']."<br>"?></td>
				</tr>
				<?php
				}
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
</td>

</tr>
</table>

	 </div>
 <div name="bottom" align="center">
 	<img src="images/bot.jpg" width="1000" height="300"/>
 </div>
  
 </body>
</html>