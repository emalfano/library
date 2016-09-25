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
<header>
    <IMG src="images/books.jpg"  >
    <p>My Library</p>
</header>
<main>
<?php
date_default_timezone_set('America/Los_Angeles');
echo "Current local time is " . date("h:i:s") . "<br>";
?>
    <hr>
    <h3> Welcome to My Library! </h3>
    <h4> (because a librarian can never have enough ways to catalog her books!) </h4>
    <a href="booksearch.html">Browse my books</a>
    <?php
        
    ?>
    </main>
    <footer>
        <p>&copy;Elizabeth Alfano 2016</p>
    </footer>
</body>
</html>