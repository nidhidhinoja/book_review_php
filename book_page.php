<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book Description Page</title>
    <link rel="stylesheet" type="text/css" href="./book_page.css">
</head>
<body>
    <h1>Book Description Page</h1>
    <div class="book-container">
        <img src="<?php echo htmlspecialchars($_SESSION['thumbnail']); ?>" alt="Book photo" class="book-photo">
        <div class="book-details">  
            <h2 class="book-title">Book Title</h2>
            <label><?php echo htmlspecialchars($_SESSION['title']); ?></label>
            <h3 class="book-subtitle">Book Subtitle</h3>
            <label><?php echo htmlspecialchars($_SESSION['subtitle']); ?></label>
            <p class="book-author">Author Name</p>
            <label><?php echo htmlspecialchars($_SESSION['author']); ?></label>
            <p class="book-publishing-year">Publishing Year</p>
            <label><?php echo htmlspecialchars($_SESSION['year']); ?></label>
            <p class="book-description">
                Book Description
                <label><?php echo htmlspecialchars($_SESSION['description']); ?></label>
            </p>
            <div class="book-buttons">
                <button class="buy-button">Buy Now</button>
                <button class="add-to-cart-button">Add to Cart</button>
            </div>
        </div>
    </div>
</body>
</html>
