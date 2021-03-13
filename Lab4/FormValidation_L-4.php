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
			$cpass="";
			$err_cpass="";
			$email="";
			$err_email="";
			$code="";
			$err_code="";
			$number="";
			$err_number="";
			$sa="";
			$err_sa="";
			$city="";
			$err_city="";
			$state="";
			$err_state="";
			$pz="";
			$err_pz="";
			$gender="";
			$err_gender="";
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
				if(empty($_POST["cpass"])){
				    $err_cpass="*Cofirm your password.";
					$has_error=true;
				}
				else if(($_POST["upass"])!=($_POST["cpass"])<6)
				{
					$err_cpass="*Password doesn't match";
					$has_error=true;
				}
				else
				{
					$cpass=htmlspecialchars($_POST["cpass"]);
				}
				if(empty($_POST["email"])){
				    $err_email="*Email Required.";
					$has_error=true;
				}
				
					
			
				else if(strpos($_POST["email"],"@")=="" || strpos($_POST["email"],".",strpos($_POST["email"],"@"))=="")
				{
					$err_email="*invalid email format";
					$has_error=true;
				}
				else
				{
					$email=htmlspecialchars($_POST["email"]);
				}
				if(empty($_POST["code"])){
				    $err_code="*Code Required.";
					$has_error=true;
				}
				
					
			
				else if(is_numeric($_POST["code"])=="true")
				{
					$err_code="*invalid code format";
					$has_error=true;
				}
				else
				{
					$code=htmlspecialchars($_POST["code"]);
				}
				if(empty($_POST["number"])){
				    $err_number="*Number Required.";
					$has_error=true;
				}
				
					
			
				else if(is_numeric($_POST["number"])=="")
				{
					$err_number="*invalid number format";
					$has_error=true;
				}
				else
				{
					$number=htmlspecialchars($_POST["number"]);
				}
				if(empty($_POST["sa"])){
					$err_sa="*Enter Street Address";
					$has_error=true;
				}
				else
				{
					$sa=htmlspecialchars($_POST["sa"]);
				}
				if(empty($_POST["city"])){
					$err_city="*Enter city";
					$has_error=true;
				}
				else
				{
					$city=htmlspecialchars($_POST["city"]);
				}
				if(empty($_POST["state"])){
					$err_state="*Enter State";
					$has_error=true;
				}
				else
				{
					$state=htmlspecialchars($_POST["state"]);
				}
				if(empty($_POST["pz"])){
					$err_pz="*Enter Postal/Zip code";
					$has_error=true;
				}
				else
				{
					$pz=htmlspecialchars($_POST["pz"]);
				}
				if(isset($_POST["gender"])){
					$gender=isset($_POST["gender"]);
				}
				else
				{
					$err_gender="*Select gender";
					$has_error=true;
					
				}
				if(empty($_POST["bio"])){
					$err_bio="*Write something";
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
						<td><input type="text" value="<?php echo $aname;?>" name="aname" >
						<span><?php echo $err_aname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Username:</span></td>
						<td><input type="text"  name="uname" value="<?php echo $uname;?>">
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Password:</span></td>
						<td><input type="password" name="upass" value="<?php echo $upass;?>"> 
						<span><?php echo $err_upass;?></span></td>
						
					</tr>
					
					<tr>
						<td align="right"><span>Confirm Password:</span></td>
						<td><input type="password"  name="cpass" value="<?php echo $cpass;?>">
						<span><?php echo $err_cpass;?></span></td>
						
					</tr>
					
					<tr>
						<td align="right"><span>Email:</span></td>
						<td><input type="text"  name="email" value="<?php echo $email;?>">
						<span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Phone:</span></td>
						<td><input size="2" type="text" placeholder="code" name="code" value="<?php echo $code;?>">-<input size="12"type="text" placeholder="Number" name="number" value="<?php echo $number;?>">
						<span><?php echo $err_code;?><?php echo $err_number;?></span></td>
					</tr>
					<tr>
						<td align="right"><span>Address:</span></td>
						<td><input type="text" placeholder="Street Address" name="sa" value="<?php echo $sa;?>">
						<span><?php echo $err_sa;?></span></td>
					</tr>
					<tr>
						<td rowspan="2"><span></span></td>
						<td><input size="5" type="text" placeholder="City" name="city" value="<?php echo $city;?>">-<input size="9" type="text" placeholder="State" name="state" value="<?php echo $state;?>">
						<span><?php echo $err_city;?><?php echo $err_state;?></span></td>
					</tr>
					<tr>
						
						<td><input type="text" placeholder="Postal/Zip code" name="pz" value="<?php echo $pz;?>">
						<span><?php echo $err_pz;?></span></td>
						
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
						<td><input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
						<span><?php echo $err_gender;?></span></td>
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
						<span><?php echo $err_bio;?></span></td>
						
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
	</body>
</html>