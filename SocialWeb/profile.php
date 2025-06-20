<!DOCTYPE html>
<html>
	<head>
		<title>Profile | Mybook</title>
	</head>

	<style type="text/css">
		#blue_bar{
			height: 50px;
			background-color: #405d9b;
			color: #d9dfeb;
		}
		#search_box{
			width:400px;
			height:20px;
			border-radius: 5px;
			border: none;
			padding: 4px;
			font-size: 14px;
			background-image: url(search.png);
			background-repeat: no-repeat;
			background-position: right;
		}
		#profile_pic{
			width:150px;
			margin-top: -200px;
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
			background-color: white;
			min-height: 400px;
			margin-top: 20px;
			color: #aaa;
			padding: 8px;
		}
		#friends{
			clear: both;
			font-size: 12px;
			font-weight: bold;
			color: #405d9b
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
			passing: 4px;
			font-size: 13px;
			display: flex;
			margin-bottom: 20px;
		}
	</style>


	<body style="font-family: tahoma; background-color:#d0d8e4;">
		<br>
		<!--top bar-->
		<div id="blue_bar">
			<div style="width:800px; margin:auto; font-size:30px;">
				Mybook &nbsp &nbsp<input type="text" id="search_box" placeholder="Search for People">
				<img src="selfie.jpg" style="width:50px; float:right;">
			</div>
		</div>
		<!--cover area-->
		<div style="width:800px; margin:auto; min-height:400px;" >
			<div style="background-color:white; text-align:center; color:#405d9b">
				<img src="mountain.jpg" style="width:100%;">
				<img id="profile_pic" src="selfie.jpg">
				<div style="font-size:20px;">Mary Banda</div><br>
				<div id="menu_buttons">Timeline</div>
				<div id="menu_buttons">About</div>
				<div id="menu_buttons">Friends</div>
				<div id="menu_buttons">Photos</div>
				<div id="menu_buttons">Settings</div>
			</div>

			<!--below cover aea-->
			<div style="display: flex;">

				<!--friends area-->
				<div style="min-height:400px; flex:1;">
					<div id="friends_bar">
						Friends<br>
							<div id="friends">
								<img id="friends_img" src="user1.jpg">
								<br>
								First User
							</div>

							<div id="friends">
								<img id="friends_img" src="user2.jpg">
								<br>
								Second User
							</div>

							<div id="friends">
								<img id="friends_img" src="user3.jpg">
								<br>
								Third User
							</div>

							<div id="friends">
								<img id="friends_img" src="user4.jpg">
								<br>
								Fourth User
							</div>
					</div>
				</div>

				<!--posts area-->
				<div style="min-height:400px; flex:2.5; padding:20px; padding-right:0px;">
					<div style="border:solid thin #aaa; padding:10px; background-color:white;">
						<textarea placeholder="What's on your mind?"></textarea>
						<input id="post_button" type="submit" value="Post">
						<br>
					</div>
				
				<!--posts-->
					<div id="post_bar">

					<!--post 1-->
						<div id="post">
							<div>
								<img src="user1.jpg" style="width:75px; margin-right:4px;">
							</div>
							<div>
								<div style="font-weight:bold; color:#405d9b">First User</div>	
								Just hiked to the summit and the view took my breath away! Nature's 
								beauty never ceases to amaze me. It's moments like these that remind 
								us how small we are in this vast world. Grateful for the opportunity 
								to disconnect and recharge. #NatureLover #HikingAdventures
								<br/><br/>
								<a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">April 23 2023</span>
							</div>
						</div>

					<!--post 2-->
					<div id="post">
							<div>
								<img src="user4.jpg" style="width:75px; margin-right:4px;">
							</div>
							<div>
								<div style="font-weight:bold; color:#405d9b">Fourth User</div>	
								
								Just started reading 'The Power of Imagination' and I'm already hooked! 
								It's fascinating how our minds can create entire worlds from words on 
								a page. This book explores the limitless boundaries of human creativity 
								and innovation. Have you read it? Also, I'm curious—how do you personally 
								tap into your imagination? Whether through art, writing, or daydreaming, 
								let's share our techniques for keeping the imagination alive and thriving! 
								#ImaginationUnleashed #BookWorm #CreativityFlow"
								<br/><br/>
								<a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">April 18 2023</span>
							</div>
						</div>
					</div>


				</div>
			</div>
			
		</div>

	</body>
</html>