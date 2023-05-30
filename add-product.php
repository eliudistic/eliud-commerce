<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Add Product Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Add Product</h1>
    <form action="add-product.php" method="post">
      <label for="name">Product Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="description">Product Description:</label>
      <textarea name="description" id="description" required></textarea>

      <label for="price">Product Price:</label>
      <input type="number" name="price" id="price" min="0" step="0.01" required>

      <label for="image">Product Image URL:</label>
      <input type="url" name="image" id="image" required>

      <button type="submit">Add Product</button>
        

      <style
      

// Store product data in database or storage system
// ...

// Redirect back to the front-end page
header('Location: home.html');
exit;
?> 

    });
  });
});
 
</style>
    </form>
  </body>
</html>