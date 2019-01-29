<?php
	if($_POST){
		// FirstName
		if(empty($_POST['firstname'])){
			$errors['firstname1'] = "*Your first name cannot be empty";
		}
		if(strlen($_POST['firstname']) < 2){
			$errors['firstname2'] = "*Your first name must be atleast two characters long";
		}
		// LastName
		if(empty($_POST['lastname'])){
			$errors['lastname1'] = "*Your last name cannot be empty";
		}
		if(strlen($_POST['lastname']) < 2){
			$errors['lastname2'] = "*Your last name must be atleast two characters long";
		}
		// telephone
		if(empty($_POST['telephone'])){
			$errors['telephone1'] = "*Telephone cannot be empty";
		}
		if(strlen($_POST['telephone']) < 10){
			$errors['telephone2'] = "*Telephone number must be 10 digit";
		}
		// password
		if(empty($_POST['password'])){
			$errors['password1'] = "*Password cannot be empty";
		}
		if(strlen($_POST['password']) < 8){
			$errors['password2'] = "*Password must be atleast eight characters long";
		}
		// company_name
		if(empty($_POST['company_name'])){
			$errors['company_name1'] = "*Company_name cannot be empty";
		}
		if(strlen($_POST['company_name']) < 2){
			$errors['company_name2'] = "*Company_name must be atleast two characters long";
		}
		
		if(count($errors) == 0){
			header("location: welldone.php");
			exit();
		 }
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<style>
		*{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: arial;
		}
		body{
			background-color: #0099cc;
			padding: 20px;
		}
		.main{
			width: 450px;
			margin: 20px auto;
			background-color: #fff;
			border-radius: 3px;
			padding-bottom: 20px;
		}
		p{
			padding-top: 10px;
			color: #888;
		}
		.head{
			border-bottom: .5px solid #ddd;
			padding: 30px;
			padding-bottom: 15px;
			text-align: center;
		}
		.form{
			padding: 5px;
		}
		.text-input{
			padding: 14px;
			width: 100%;
			border: none;
			background-color: #ddd;
			font-size: 12pt;
			border-radius: 3px;	
		}
		span{
			font-size: 12pt;
			color: #888;
		}
		.pcolor{
			color: red;
		}
		#submit{
			width: 100%;
			background-color: #0099cc;
			padding: 10px 15px;
			color: #fff;
			border: none;
			border-radius: 4px;
			font-size: 14pt;
			font-weight: bolder;
			
		}
	</style>
	
	</head>
	<body>
	
	<div class="main">
		<div class="head">
			<h1>SIGN UP</h1>
		</div>
		<div class="form">
			<form method="post" target=""> 
				<table cellspacing="25">
					<tr>
						<td colspan="2">
							<label for="firstname">FirstName</label>
							<input type="text" name="firstname" class="text-input" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" />
							<p class="pcolor"><?php if(isset($errors['firstname1'])) echo $errors['firstname1']; ?></p>
							<p class="pcolor"><?php if(isset($errors['firstname2'])) echo $errors['firstname2']; ?></p>
						</td>
					</tr>
				
				
					<tr>
						<td colspan="2">
							<label for="lastname">LastName</label>
							<input type="text" name="lastname" class="text-input" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" />
							<p class="pcolor"><?php if(isset($errors['lastname1'])) echo $errors['lastname1']; ?></p>
							<p class="pcolor"><?php if(isset($errors['lastname2'])) echo $errors['lastname2']; ?></p>
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<label for="telephone">Telephone</label>
							<input type="number" name="telephone" class="text-input" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']; ?>" />
							<p class="pcolor"><?php if(isset($errors['telephone1'])) echo $errors['telephone1']; ?></p>
							<p class="pcolor"><?php if(isset($errors['telephone2'])) echo $errors['telephone2']; ?></p>
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<label for="password">Password</label>
							<input type="password" name="password" class="text-input" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" />
							</p>
							<p class="pcolor"><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p>
							<p class="pcolor"><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>
							
					<tr>
						<td colspan="2">
							<label for="company_name">Company_name</label>
							<input type="text" name="company_name" class="text-input" value="<?php if(isset($_POST['company_name'])) echo $_POST['company_name']; ?>" />
							<p class="pcolor"><?php if(isset($errors['company_name1'])) echo $errors['company_name1']; ?></p>
							<p class="pcolor"><?php if(isset($errors['company_name2'])) echo $errors['company_name2']; ?></p>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="submit" id="submit">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	</body>
</html>