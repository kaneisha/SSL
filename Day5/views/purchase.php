<?php
include 'views/checkSession.php'
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Shoe Runway Form</title>
	</head>
	<body>
		<h1>Order Form</h1>
	<form action="?action=purchase" method="post">
		<label for="purchase_date">Purchase Date:</label> <input type="date" name="purchase_datee" placeholder="MM/DD/YYYY" id="dop">

		<fieldset>
			<label>Shipping Options</label><br>
			<label for="standard"><input type="radio" name="shipping" checked="checked" value="standard" id="excellent">Standard(4-7 business days) $4.00</label><br>
			<label for="express"><input type="radio" name="shipping" value="express" id="excellent">Exress(2-5 business days) $6.00</label><br>
			<label for="next_day"><input type="radio" name="shipping" value="next_day" id="excellent">Next Day $18.00</label><br>
			<br>
			<label>Would you like to track your order?</label><br>
			<label for="yes"><input type="radio" name="track" value="yes" id="yes">Yes<br></label>
			<label for="no"><input type="radio" name="track" value="no" checked="checked" id="no">No</label>
		</fieldset>

		<fieldset>
			<legend>Pairs of shoes ordered</legend>
			<label for="number_of_shoes"><input type="text" name="number_of_shoes" placeholder="2" id="shoes"></label>
		</fieldset>
		<label for="price">Total: <input type="text" name="price" placeholder="$30.00" id="total"></label><br>
		<label for="link">Facebook Link: <input type="url" name="link" placeholder="http://www.facebook.com" id="fb"></label><br>
		<fieldset>
			<legend>Colors</legend>
			<label for="red"><input type="checkbox" name="colors" value="red" id="music">Red<br></label>
			<label for="blue"><input type="checkbox" name="colors" value="blue" id="music">Blue<br></label>
			<label for="black"><input type="checkbox" name="colors" value="black" id="music">Black<br></label>
			<label for="white"><input type="checkbox" name="colors" value="white" id="music">White<br></label>
			<label for="pink"><input type="checkbox" name="colors" value="pink" id="music">Pink<br></label>
			<label for="yellow"><input type="checkbox" name="colors" value="yellow" id="music">Yellow<br></label>
		</fieldset>
		<select multiple name="size" id="visit">
			<option value="5">5</option>
			<option value="5.5">5.5</option>
			<option value="6">6</option>
			<option value="6.5">6.5</option>
			<option value="7">7</option>
			<option value="7.5">7.5</option>
			<option value="8">8</option>
			<option value="8.5">8.5</option>
			<option value="9">9</option>
			<option value="9.5">9.5</option>
			<option value="10">10</option>
		</select>
		<input type="submit" value="Submit">
	</form>
	</body>
</html>
		