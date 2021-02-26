<html>
	<head></head>
	<body>
		<?php

			$aname="";
			$err_aname="";
			$uname="";
			$err_uname="";
			$upass="";
			$err_upass="";
			$bio="";
			$err_bio="";
			$has_error=false;
			//if(isset($_POST["submit"])){
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["aname"])){
					$err_aname="*Enter Name";
					$has_error=true;
				}
				else
				{
					$aname=htmlspecialchars($_POST["uname"]);
				}
				if(empty($_POST["uname"])){
				    $err_uname="*Username required";
					$has_error=true;
				}
				else if(strlen($_POST["uname"])>0 && strlen($_POST["uname"])<6)
				{
					$err_uname="*Username should contain atleast 5 character";
					$has_error=true;
				}
				else
				{
					$uname=htmlspecialchars($_POST["uname"]);
				}
				if(empty($_POST["upass"]))
				{
					$err_upass="*Password required";
					$has_error=true;
				}
				else if(strlen($_POST["upass"])>0 && strlen($_POST["upass"])<8 && (strpos($_POST["upass"],"#")=="" || strpos($_POST["upass"],"?")=="" ))
				{
					$err_upass="*Password should contain atleast 8 character and one special character";
					$has_error=true;
				}
				else
				{
					$upass=htmlspecialchars($_POST["upass"]);
				}
				if(empty($_POST["bio"])){
					$err_bio="*Write something";
					$has_error=true;
				}
				else if(strlen($_POST["bio"])>0 && strlen($_POST["bio"])<10)
				{
					$err_bio="*Bio should contain atleast 10 character";
					$has_error=true;
				}
				else
				{
					$bio=htmlspecialchars($_POST["bio"]);
				}
				if(!$has_error){
					echo "Username: $uname";
				}
			/*echo "Name: ". $_POST["uname"]."<br>";
			echo "Password: ". $_POST["pass"]."<br>";
			echo "Gender: ".$_POST["gender"]."<br>";
			echo "Profession: ".$_POST["profession"]."<br>";
			echo "Bio: ".$_POST["bio"]."<br>";
			$var = $_POST["hobbies"];
			for($i=0;$i<count($var);$i++){
				echo $var[$i]."<br>";
			}*/
			}
			
		?>
		<fieldset>
		<legend align="center"><h1>Club Member Registration</h1></legend>
		<form action="" method="post">
				<table align="center">
					<tr>
						<td align="right"><span>Name:</span></td>
						<td><input type="text"  name="aname">
						<span><?php echo $err_aname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Username:</span></td>
						<td><input type="text"  name="uname">
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Password:</span></td>
						<td><input type="password" name="upass"> 
						<span><?php echo $err_upass;?></span></td>
						
					</tr>
					
					<tr>
						<td align="right"><span>Confirm Password:</span></td>
						<td><input type="password"  name="cpass"></td>
						
					</tr>
					
					<tr>
						<td align="right"><span>Email:</span></td>
						<td><input type="text"  name="email"></td>
					</tr>
					<tr>
						<td align="right"><span>Phone:</span></td>
						<td><input size="2" type="text" placeholder="code" name="code">-<input size="12"type="text" placeholder="Number" name="number"></td>
					</tr>
					<tr>
						<td align="right"><span>Address:</span></td>
						<td><input type="text" placeholder="Street Address" name="sa">
					</tr>
					<tr>
						<td rowspan="2"><span></span></td>
						<td><input size="5" type="text" placeholder="City" name="city"><b>-</b><input size="9" type="text" placeholder="State" name="state">
					</tr>
					<tr>
						
						<td><input type="text" placeholder="Postal/Zip code" name="pz">
						
					</tr>
					<tr>
						<td align="right">Birth Date:</td>
						<td>
							<select>
								<option>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option> $i </option>";
									}
								?>
								
							</select>
							<select>
								<option>Month</option>
								<?php
								$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
								
									foreach($month as $values){
										echo "<option> $values </option>";
									}
								?>
								
							</select>
							<select>
								<option>Year</option>
								<?php
									for($j=1972;$j<=2021;$j++){
										echo "<option> $j </option>";
									}
								?>
								
							</select>
						</td>
					</tr>
					<tr>
						
						<td align="right"><span>Gender:</span></td>
						<td><input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					</tr>
					<tr>
						<td align="right" rowspan="4"><span>Where did you hear about us?</span></td>
						<td><input type="checkbox" value="f/c" name="hobbies[]">A Friend or colleague </td>
					</tr>
					<tr>
						<td><input type="checkbox" value="google" name="hobbies[]">Google </td>
					</tr>
					<tr>
						<td><input type="checkbox" value="blogpost" name="hobbies[]">Blog post </td>
					</tr>
					<tr>
						<td><input type="checkbox" value="newsArticle" name="hobbies[]">News Article </td>
					</tr>
					
					
					<tr>
						<td align="right"><span>Bio:</span></td>
						<td><textarea name="bio"></textarea>
						
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
	</body>
</html>