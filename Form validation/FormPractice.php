<html>
	<head></head>
	<body>
	
	<?php
		$uname="";
		$err_uname="";
		$upass="";
		$err_upass="";
		$bio="";
		$err_bio="";
		$gender="";
		$err_gender="";
		
		//if(isset($_POST["submit"])){	
		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(empty($_POST["uname"])){
				$err_uname="*Username required";
				
			}
			else if(strlen($_POST["uname"])>0 && strlen($_POST["uname"])<5)
			{
				$err_uname="*Username should contain atleast 5 character";
				
			}
			else
			{
				$uname=$_POST["uname"];
			}
			if(empty($_POST["upass"]))
			{
				$err_upass="*Password required";
				
			}
			else if(strlen($_POST["upass"])>0 && strlen($_POST["upass"])<5)
			{
				$err_upass="*Password should contain atleast 5 character";
				
			}
			else
			{
				$upass=$_POST["upass"];
			}
			if(empty($_POST["bio"])){
				$err_bio="*Write something";
				
			}
			else if(strlen($_POST["bio"])>0 && strlen($_POST["bio"])<10)
			{
				$err_bio="*Bio should contain atleast 10 character";
				
			}
			else
			{
				$bio=$_POST["bio"];
			}
			if(isset($_POST["gender"])){
				
				
			}
			
			else
			{
				$err_gender="*select gender";
			}
			
		
		
			/*echo "Name: ". $_POST["uname"]. "<br>";
			echo "Password: ". $_POST["upass"]. "<br>";
			echo "Gender: ". $_POST["gender"]. "<br>";
			echo "Profession: ". $_POST["prof"]. "<br>";
			echo "Bio: ". $_POST["bio"]. "<br>";
			$var=$_POST["hobbies"];
			for($i=0;$i<count($var);$i++)
			{
				echo $var[$i] ."<br>";
			}*/
		}
		?>
	
		<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User Access </span></td>
					<td>:<input type="text" placeholder="username" value="<?php echo $uname;?>" name="uname" >
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					
					<td>:<input type="password" placeholder="password" value="<?php echo $upass;?>" name="upass">
					<span><?php echo $err_upass;?></span></td>
					
				</tr>
				<tr>
					<td><span>Gender </span></td>
					<td>:<input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female
					<span><?php echo $err_gender;?></span></td>
					
				</tr>
				<tr>
					<td><span>Hobbies </span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
						 <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games
					</td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="prof">
							<option>Teacher</option>
							<option>Sportsman</option>
							<option>Engineer</option>
							<option>Singer</option>
						</select>
					</td>					
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"><?php echo $bio;?></textarea><span>
					<?php echo $err_bio;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</form>
		
	</body>
</html>