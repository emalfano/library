<!DOCTYPE HTML>
<html>
<head>
    <title>Library Home Page</title>
    <meta name="description" content="A library catalog application.">
    <meta name="keywords" content="library, database">
    <meta name="author" content="Elizabeth Alfano">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--    <script src="main.js"></script>-->
</head>
<body>
<IMG src="images/library.jpg" width="300" height="200" >
<?php
date_default_timezone_set('UTC');
echo "time is " . date("h:i:s:") . "<br>";
?>
<hr>
<h3> Welcome to My Library! </h3>
<a href="booksearch.html">Browse our books</a>
</body>
</html>