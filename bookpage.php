<?php
  require_once 'connection.php';
  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM book_data WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $title = $row['title'];
      // other book details here
    } else {
      $title = 'Book not found';
    }
  } else {
    $title = 'Invalid book ID';
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="./book_page.css">
  </head>

  <body>
    <h1><?php echo $title; ?></h1>
    <div class="book-container">
      <img src="<?php echo $row['thumbnail']; ?>" alt="Book photo" class="book-photo">
      <div class="book-details">  
        <h2 class="book-title">Book Title</h2>
        <label><?php echo $row['title']; ?></label>
        <h3 class="book-subtitle">Book Subtitle</h3>
        <label><?php echo $row['subtitle']; ?></label>
        <p class="book-author">Author Name</p>
        <label><?php echo $row['authors']; ?></label>
        <p class="book-publishing-year">Publishing Year</p>
        <label><?php echo $row['published_year']; ?></label>
        <p class="book-description">
          Book Description
          <label><?php echo $row['description']; ?></label>
        </p>
        <div class="book-buttons">
          <button class="buy-button">Buy Now</button>
          <button class="add-to-cart-button">Add to Cart</button>
        </div>
      </div>
    </div>
  </body>
</html>
