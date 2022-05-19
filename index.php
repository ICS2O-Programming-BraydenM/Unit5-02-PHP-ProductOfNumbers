<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Even numbers, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>For Loops in PHP</title>
  </head>
  <body>
   <center>
<!-- Adding a JavaScript button that calculates the product of two positive integers using only addition in a for loop -->
    <h1>Product calculation using a For Loop in PHP</h1>
		<h3>This program will calculate the product of two positive integers only using addition in a For loop.</h3>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
								<form action="./results.php" method="post" target="results">
						<label for="userNum">Enter a positive integer:</label>
						<input type="number" step="1" name="firstNum"><br><br>		
            <label for="userNum">Enter a second positive integer:</label>
						<input type="number" step="1" name="secondNum"><br><br>		
						<input type="submit" value="Calculate product">
					</form>
				</td>
				<td valign="top" align="left">
<!-- adding an image -->
					<img src="./images/forest.jpg" alt="Numbers" width="80%">
				</td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
		<iframe name="results"></iframe>	
		</div>
   </center>
  </body>
</html>
