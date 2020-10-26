<!DOCTYPE html>
<html>
	
	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<link href="image/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="nerdluv.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="bannerarea">
			<img src="image/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>

		<div> 
			<form action="signup-submit.php" method="post">
			<fieldset>
				<ul>
					<strong>Name:</strong>
				</ul>
				<input type="text" size="16" name="name"/>
				<br/>

				<ul>
					<strong>Gender:</strong>
				</ul>
				<input type="radio" name="gender" value="male"/> Male
				<input type="radio" name="gender" value="female" checked="checked"/> Female
				<br/>

				<ul>
					<strong>Age:</strong>
				</ul>
				<input type="text" size="6" name="age"/>
				<br/>

				<ul>
					<strong>Personality type:</strong>
				</ul>
				<input type="text" size="6" name="type"/>
				<br/>

				<ul>
					<strong>Favorite OS:</strong>
				</ul>
				<select name="os">
					<option value="windows">Windows</option>
					<option value="osx">Mac OS X</option>
					<option value="linux">Linux</option>
				</select>
				<br/>

				<ul>
					<strong>Seeking age:</strong>
				</ul>
				<input type="text" size="6" placeholder="min" name="min"/>to
				<input type="text" size="6" placeholder="max" name="max"/> 
				<br/>

				<input type="submit" value="Sign Up" />
				
			</fieldset>
			</form>
		</div> 

		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="nerdluv.php">
						<img src="image/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>

		<div id="w3c">
			<a href="#"><img src="image/w3c-xhtml.png" alt="Valid HTML" /></a>
			<a href="#"><img src="image/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
