<?php

include_once("db.php");


?>

<html>
<head>>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	 <style>
      body{
        margin: 0;
        padding:0;
        text-align: center;
        font-family: sans-serif;
        /*background-image: url("res/images/fb10.png");*/
        background-image: linear-gradient(to left top, #1a8e74, #148d6e, #0f8c68, #0d8b61, #0e8a5a, #008d6e, #008f7f, #00908d, #0091b4, #008ddf, #007ef8, #9a5bed);
      	height:auto;
      	width: auto;
      	background-position: center;
      	background-repeat: no-repeat;
      	background-size: cover;
      	text-align: center;
      	padding:10px;
      }
      .container-feedback-title{
        margin-top: 95px;
        color:#fff;
        text-transform: uppercase;
        transition: all 4s ease-in-out;
      }
      .conatiner-feedback-title h1{

      font-size: 40px;
      line-height: 10px;
      }
      .container-feedback-title h2{
      font-size: 20px;
      }
      ::placeholder {
        color: #ffffff;
        opacity: 1; /* Firefox */
      }
      ::-webkit-input-placeholder{ /*Safari, Google Chrome, Opera 15+) and Microsoft Edge*/
        color: #ffffff;
        opacity: 1;
      }
      ::-moz-placeholder{ /* mozilla Firefox */
        color: #ffffff;
        opacity: 1;
      }
      :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #ffffff;
        opacity: 1;
      }
