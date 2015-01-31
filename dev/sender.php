<?php

require_once 'lib/inc/util.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(sendRSVPEmail($_POST)) {
        // Send confirmation email.
        sendConfirmationEmail($_POST);
    }
}

/*
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
*/

// if (isset($_POST['treasure'])){
// echo "treasure will be set if the form has been submitted (to TRUE, I believe)";
// }



?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Jessica Zappala & Joshua Anderson Are Engaged to Be Married | August 06, 2016</title>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets and JavaScript rels -->
    <link rel="stylesheet" href="lib/styles/css/screen.css">
    <script src="lib/js/jquery-1.11.1.min.js"></script>
    <script src="lib/js/jquery-easing-1.3.js"></script>
    <script src="lib/js/jquery.scrollto.js"></script>
    <script src="lib/js/functions.js"></script>
    
    <!-- Font Awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    
    <!-- Main Content -->
    <div class="wrapper">
        <h1>Message Sent</h1>
    </div>
    <!-- End Main Content -->

</body>

</html>