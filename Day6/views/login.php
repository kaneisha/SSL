<html>
<head>
	<link/>
</head>
<body>
	<!-- <form name="myform" id="myform" method="post" action="?action=signup">

		<span class="message">Username:</span>
			<input id="uname" name="add_uname" type="text" class="textbox" />
		<span class="message">Password:</span>
			<input id="pass" name="add_pass" type="password" class="textbox" />
		<input type="submit" value="Submit" class="button" />
		
	</form> -->
	<form name="myform" class="form_dec" id="myform" method="post" action="?action=signup">
		<fieldset>
			<div class="form_input">
		<span class="message">Username:</span>
			<input id="uname" name="add_uname" type="text" required="required" class="textbox" />
			</div>
		</fieldset>
		<fieldset>
			<div class="form_input">
		<span class="message">Password:</span>
			<input id="pass" name="add_pass" type="password" required="required" class="textbox" />
			</div>
		</fieldset>
		<input type="submit" value="Submit" class="button" />
		
	</form>
</body>
</html>