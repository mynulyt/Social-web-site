<?php
session_start();

	include("classes/connect.php");
	include("classes/login.php");

    $email= "";
    $password = "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	 {


		$login = new Login();
		$result = $login->evaluate($_POST);

        if($result != "")

        {
            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;' >";
            echo "The following errors occured: <br><br>";
            echo $result;
            echo "</div>";
        } else 
        {
            header("Location: profile.php");
            die;
        }
		
    $email = $_POST['email'];
    $password = $_POST['password'];

	}




?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>BGCBook | Log in</title>
	
	<style type="text/css">
		
		#bar1{
			height: 100px;
			 background-color: rgb(59, 89, 152); 
			 color: #d9dfeb;
			 padding: 4px;
			}
		#singup_button{
			background-color: #42b27a;
			width: 70px;
			text-align: center;
			padding: 4px;
			border-radius: 4px;
			float: right;
		}
		#bar2{
			background-color: white;
			width: 800px;
			font-weight: bold;
			margin:auto; 
			margin-top: 50px ;
			padding: 10px;
			text-align: center;
			padding-top: 50px;

		}
		#text{
			height: 40px;
			width: 300px;
			border-radius: 4px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
		}
		#button{
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
		<div id="singup_button">Singup</div>		 
	</div>

	<div id="bar2">

		<form method="post">

			Log in to BGCBook <br><br>
	
	<input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email or Phone Number"><br><br>
	<input name="password" value="<?php echo $password ?>" type="Password" id="text" placeholder="Password"><br><br>	
	
	<input type="submit" id="button" value="Log in"><br><br><br>	
		
		</form>
	
	
	</div>

</body>
</html>