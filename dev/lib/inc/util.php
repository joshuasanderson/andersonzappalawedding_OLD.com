<?php

define("TO_EMAIL", "rsvp@andersonzappalawedding.com");
define("FROM_EMAIL", "from@andersonzappalawedding.com");
define("INVITE_PASSWORD", "aug4oh7");

/*
	@summary: Attempt to send me an RSVP Email from the user who filled out the form.
	@param: data - contains the $_POST array with the users name, guest name, and email address to send to.
	@returns: true or false - True if the user entered the correct password. False if not and won't send a confirmation email.
*/
function sendRSVPEmail($data) {
	if(isPasswordValid($data['password'])) {
		// Send email and confirm RSVP.

		return true;
	}

	return false;
}

/*
	@summary: If we sent a valid RSVP Email, let's send the user a confirmation email.
	@param: data - contains the $_POST array with the users name, guest name, and email address to send to.
	@returns: void - Nothing to do in either case.
*/
function sendConfirmationEmail($data) {

}

function isPasswordValid($password) {
	return (strtolower($password) === INVITE_PASSWORD);
}

?>