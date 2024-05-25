<?php
	include("classes/connect.php");
	include("classes/singup.php");

    $first_name = "";
    $last_name = "";
    $gender = "";
    $email = "";


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$singup = new Signup();
		$result = $singup->evaluate($_POST);

        if($result != "")
        {
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;' >";
            echo "The following errors occured: <br><br>";
            echo $result;
            echo "</div>";
        } else 
        {
            header("Location: login.php");
            die;
        }
		

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

	}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BGCBook | Sign up</title>
	<style type="text/css">
		#bar1 {
			height: 100px;
			background-color: rgb(59, 89, 152);
			color: #d9dfeb;
			padding: 4px;
		}
		#singup_button {
			background-color: #42b27a;
			width: 70px;
			text-align: center;
			padding: 4px;
			border-radius: 4px;
			float: right;
		}
		#bar2 {
			background-color: white;
			width: 800px;
			font-weight: bold;
			margin: auto;
			margin-top: 50px;
			padding: 10px;
			text-align: center;
			padding-top: 50px;
		}
		#text {
			height: 40px;
			width: 300px;
			border-radius: 4px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
		}
		#button {
			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border: none;
			background-color: rgb(59, 89, 152);
			color: white;
		}
	</style>
</head>
<body style="font-family: tahoma; background-color: #e9ebee;">
	<div id="bar1">
		<div style="font-size: 40px;">BGCBook</div>
		<div id="singup_button">Login</div>
	</div>
	<div id="bar2">
		Sign up to BGCBook <br><br>
		<form method="post" action="singup.php">
			<input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name"><br><br>
			<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name"><br><br>
			<select id="text" name="gender">
				<option <?php echo $gender ?>Gender</option>
				<option>Male</option>
				<option>Female</option>
			</select><br><br>
			<input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email or Phone Number"><br><br>
			<input name="password" type="password" id="text" placeholder="New Password"><br><br>
			<input name="password2" type="password" id="text" placeholder="Re-type Password"><br><br>
			<input type="submit" id="button" value="Sign up"><br><br><br>
		</form>
	</div>
</body>
</html>
