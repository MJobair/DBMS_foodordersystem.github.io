<?php include('conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MJ FOODS</title>
	
	<!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main1.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: white;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: green;
        }

        .active {
        background-color: white;
        }
		body{
		background-color: white;
		font-family: Arial, Helvetica, sans-serif; 
		}
		* {box-sizing: border-box}

		/* Full-width input fields */
		input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
		background-color: #ddd;
		outline: none;
		}

		hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
		}

		/* Set a style for all buttons */
		button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
		}

		button:hover {
		opacity:1;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
		padding: 14px 20px;
		background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		.cancelbtn, .signupbtn {
		float: left;
		width: 50%;
		}

		/* Add padding to container elements */
		.container {
		padding: 26px;
		}

		/* Clear floats */
		.clearfix::after {
		content: "";
		clear: both;
		display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			width: 100%;
		}
    </style>
	
</head>