<?php
    require_once 'connection.php';
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $sql = "SELECT * FROM book_data";
    $books = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Product Card Search</title>
</head>

<body>
    <div class="container">
    <?php
        while($row = mysqli_fetch_assoc($books)){
    ?>
    
    <div class="card">
    <img id="<?php echo $row['id']; ?>" src="<?php echo $row['thumbnail']; ?>" onclick="find_book(this.id)">
    <h3><?php echo $row['title']; ?></h3>
    <div class="price">$19.99</div>
    <button>Add to Cart</button>
</div>

    <?php
        }
    ?> 
</div>
    <script src="search_script.js"></script>
</body>

</html>