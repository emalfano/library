<!DOCTYPE HTML>
<html>
<head>
    <title>Book Search Results</title>
</head>
<body>
<h3>Book Search Results</h3>
<hr>

<?php
# This is the PDO version
require_once('mysql_connect.php');
# Get Data from mysql db

$searchtitle = trim($_POST['searchtitle']);
$searchauthor = trim($_POST['searchauthor']);
$searchsubject = trim($_POST['searchsubject']);

if (!$searchtitle && !$searchauthor & !$searchsubject){
    printf("Your must specify a title and/or an author, or a subject");
    exit();
}

//$searchtitle = addslashes($searchtitle);
//$searchauthor = addslashes($searchauthor);
//$searchsubject = addslashes($searchsubject);

#open the database
try {
    //$db = new PDO("mysql:host=localhost;dbname=library", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    printf("Unable to open database: %s\n", $e->getMessage());
}
# Query. Users can enter title, author or both
$query = " select * from books";
if ($searchsubject){ //subject search
    $query = $query . ", categories where categories.category like '%" . $searchsubject . "%' and books.categoryid = categories.id";
} else
if ($searchtitle && !$searchauthor){ //title search
    $query = $query ." where title like '%" . $searchtitle . "%'";
} else
if (!$searchtitle && $searchauthor){ // author search
    $query = $query ." where author like '%" . $searchauthor . "%'";
} else
if ($searchtitle && $searchauthor){ // author and title search
    $query = $query ." where title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%'";
}

printf("Debug: running the query: %s ", $query);

try {
    $sth = $db->query($query);
    $bookcount = $sth->rowCount();
    if ($bookcount == 0) {
        printf("Sorry we did not find any matching books");
        exit;
    }
//    //theirs
//    printf('<table bgcolor="#bdc0ff" cellpadding="6">');
//    printf('<tr><b><td>Title</td> <td>Author</td> </b> </tr>');
//    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
//        printf("<tr> <td> %s </td> <td> %s </td> </tr>", htmlentities($row["title"]), htmlentities($row["author"]));
//    }
    //mine
    printf('<table bgcolor="#bdc0ff" cellpadding="6">');
    printf('<tr><td><b>Title</b></td><td><b>Author</b></td></b></tr>');
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        printf("<tr><td> %s </td><td> %s </td></tr>", htmlentities($row["title"]), htmlentities($row["author"]));
    }
}
catch (PDOException $e) {
    printf("We had a problem: %s\n", $e->getMessage());
}
printf("</table>");
printf("<br>We found %s matching books", $bookcount);
?>
</body>
</html>
