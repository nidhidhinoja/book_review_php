<?php

require_once 'connection.php';
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

$books = mysqli_query($conn, $sql);



if(isset($_GET["thumbnail"])){
    $thumbnail = $_GET["thumbnail"];
    $sql = "SELECT * FROM book_data WHERE thumbnail = '$thumbnail'";
    $result = $conn->query($sql);


    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $thumbnail = $row['thumbnail'];
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $author = $row['authors'];
        $year = $row['published_year'];
        $description = $row['description'];

        $book_info_array = array('$title, $subtitle, $author, $year, $description');

        $book_info_json = json_encode($book_info_array); 

        echo $book_info_json;
    }
}


?>