<!-- If we want to check if the user has activated their account, we can add the following code to the pages we want to restrict non-activated users: -->


============================================================================


<!-- if ($account['activation_code'] == 'activated') {
	// account is activated
	// Display home page etc
} else {
	// account is not activated
	// redirect user or display an error
} -->

============================================================================


<!-- For the above code to work, you will need to connect to your MySQL database and select the user's account. -->