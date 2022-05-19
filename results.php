<?php
	// get user input
	$firstNum = intval($_POST["firstNum"]);
  $secondNum = intval($_POST["secondNum"]);

	// initialize number as an empty string
	$numbers = 0;

  // use a for loop to calculate product of two positive integers solely using addition 
	for ($counter = 1; $counter <= $secondNum; $counter++) {
    $numbers = $numbers + $firstNum;
  }

  	// display results back to user 
	  echo "The product of the two positive integers would be " . "$numbers";
?>