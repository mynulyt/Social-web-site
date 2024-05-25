<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		BGCBook | Profile
	</title>
	<style type="text/css">
		#blue_bar{
			background-color: #405d9b;
			height: 50px;
			color: #d9dfeb;
		}
		#search_box{
			width: 400px;
			height: 20px;
			border-radius: 4px;
			border: none;
			padding: 4px;
			font-size: 14px;
			background-image: url(search.png);
			background-repeat: no-repeat;
			background-position: right;


		}
		#profile_pic{
			width: 150px;
			
			border-radius: 50%;
			border: solid 2px white;
		}
		#menu_buttons{
			width: 100px;
			
			display: inline-block;
			margin: 2px;

		}
		#friends_img{
			width: 75px;
			float: left;
			margin: 8px;
		}
		#friends_bar{
			
			min-height: 400px;
			margin-top: 20px;
			padding: 8px;
			text-align: center;
			font-size: 20px;
			color: #405d9b;
		}
		#friends{
			clear: both;
			font-size: 12px;
			font-weight: bold;
			color: #405d9b;
		}
		textarea{
			width: 100%;
			border: none;
			font-family: tahoma;
			font-size: 14px;
			height: 60px;
		}
		#post_button{
			float: right;
			background-color: #405d9b;
			border: none;
			color: white;
			padding: 4px;
			font-size: 14px;
			border-radius: 2px;
			width: 50px;
		}
		#post_bar{
			margin-top: 20px;
			background-color: white;
			padding: 10px;

		}
		#post{
			padding: 4px;
			font-size: 13px;
			display: flex;
			margin-bottom: 20px;
		}

		
	</style>
</head>
<body style="font-family: tahoma; background-color: lightsteelblue;">
	<br>
	<!--top bar-->
<div id="blue_bar">
	<div style="width: 800px; margin: auto; font-size: 30px; ">
	BGCBook &nbsp &nbsp<input type="text" id="search_box" placeholder="search for people ">
	<img src="selfie.jpg" style="width:50px; float: right;">
</div>	
</div>
<!--cover-->

<div style="width: 800px; margin:auto;  min-height: 400px;">
	

	<!--below the cover area-->
	<div style="display: flex;">

		<!--friends area-->
		<div style="min-height: 400px; flex: 1;">
			
			<div id="friends_bar">
				<img src="selfie.jpg" id="profile_pic"><br>
				Miss BGC 
				

			</div>
		</div>

		<!--post area-->
		<div style="min-height:400px; flex: 2.5; padding: 20px;">
			
			<div style="border: solid thin #aaa; padding: 10px;background-color: white;">
				
				<textarea placeholder="Whats on your mind?"></textarea>
				<input type="submit" id="post_button" value="Post">
				<br>				
			</div>
			<!--posts-->
			<div id="post_bar">

				<!--post 1-->
				<div id="post">
					<div>
						<img src="user1.jpg" style="width:75px; margin-right: 4px;">
					</div>
					<div>
						<div style="font-weight: bold; color:#405d9b">First Guyz</div>
						Mynul Alam is simply dummy text of the printing and typeseting industry. Mynul Alam is simply dummy text of the printing and typeseting industry.Mynul Alam is simply dummy text of the printing and typeseting industry.Mynul Alam is simply dummy text of the printing and typeseting industry.
						<br><br>
						<a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">june 20 2024</span>
					</div>
				</div>	

				<!--post 2-->
				<div id="post">
					<div>
						<img src="user4.jpg" style="width:75px; margin-right: 4px;">
					</div>
					<div>
						<div style="font-weight: bold; color:#405d9b">Ala Uddin</div>
						Mynul Alam is simply dummy text of the printing and typeseting industry. Mynul Alam is simply dummy text of the printing and typeseting industry.Mynul Alam is simply dummy text of the printing and typeseting industry.Mynul Alam is simply dummy text of the printing and typeseting industry.
						<br><br>
						<a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">june 20 2024</span>
					</div>
				</div>

			</div>
		</div>
	</div>

	
</div>
</body>
</html>