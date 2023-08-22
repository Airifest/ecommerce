<!DOCTYPE html>
<html>
<head>
    <title>Simple E-commerce</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container">
        <h1>Welcome to our store!</h1>
        <div class="product-list">
            <?php include 'products/product_data.php'; ?>
        </div>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
