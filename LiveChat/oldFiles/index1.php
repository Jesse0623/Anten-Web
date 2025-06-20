<!DOCTYPE html>
<html>
<head>
	<title>MashChat</title>
</head>

<style type="text/css"> 
	
	@font-face{

		font-family: headFont;
		src: url(ui/fonts/Summer-Vibes-OTF.otf);
	} 

	@font-face{

		font-family: myFont;
		src: url(ui/fonts/OpenSans-Regular.ttf);
	}

	#wrapper{

		max-width: 900px;
		min-height: 500px;
	    display: flex;
	    margin: auto;
	    color:white;
	    font-family: myFont;
	    font-size: 13px;
	}

	#left_pannel{
		min-height: 500px;
		background-color: #572da8;
        flex:1;
        text-align: center;

	}

	#profile_image{
		width:50%;
		border: solid thin white;
		border-radius: 50%;
		margin:10px;
	}

	#left_pannel label{
		width:100%;
		height:20px;
		display: block;
		background-color: #aa8ed4;
		border-bottom: solid thin #ffffFf55;
		cursor: pointer;
		padding:5px;
		transition: all 1s ease;
	}

	#left_pannel label:hover{

		background-color: #e3d8ed;
	}

	#left_pannel label img{
		float:right;
		width:25px;

	}

	#right_pannel{
		min-height: 500px;
		flex:4;
		text-align: center;		
	}

	#header{

		background-color: #aa8ed4;
		height:70px;
		font-size: 40px;
		text-align: center;
		font-family: headFont;
	}

	#inner_left_pannel{
		background-color: #292F33;
		flex:1;
		min-height: 430px;
	}

	#inner_right_pannel{
		background-color: #e3d8ed;
		flex:2;
		min-height: 430px;
		transition: all 2s ease;
	}

	#radio_contacts:checked ~ #inner_right_pannel{

		flex: 0;
	}

	#radio_settings:checked ~ #inner_right_pannel{

		flex: 0;
	}

</style>
<body>

	<div id ="wrapper">

		<div id="left_pannel">

			<div style="padding: 10px;">
				<img id="profile_image" src="ui/images/user3.jpg">
				<br>
				Kelly Hartmann
				<br>
				<span style="font-size: 12px; opacity: 0.5;"> kellyhartmann@gmail.com </span>

				<br>
				<br>
				<br>
				<div>
					<label id="label_chat" for="radio_chat">Chat<img src="ui/icons/chat.png"></label>
					<label id="label_contacts" for="radio_contacts">Contacts <img src="ui/icons/contacts.png"></label>
					<label id="label_settings" for="radio_settings">Settings <img src="ui/icons/settings.png"></label>
				</div>

			</div>
		</div>
		<div id="right_pannel">
			<div id="header">MashChat</div>
			<div id="container" style="display: flex;">

				<div id= "inner_left_pannel"></div>

				<input type="radio" id="radio_chat" name="myradio" style="display:none;">
			    <input type="radio" id="radio_contacts" name="myradio" style="display:none;">
			    <input type="radio" id="radio_settings" name="myradio" style="display:none;">

				<div id = "inner_right_pannel"></div>

		</div>
	</div>

</body>
</html>