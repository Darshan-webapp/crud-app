<html>
<head>
    <title>Crud App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <!--navbar section-->
    
    <?php require_once('navbar.php'); ?>
    
    <div class="container">
        <div class="col-md-4 offset-4 mt-3">
            <h1>CRUD Web App</h1>
            <form action="server/form-handle.php" method="post" id="form">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" id="productName" name="product_name" class="form-control" required>
                    <p id="errMsgProductName" class="text-danger"></p>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" id="price" name="price" min="1" max="10000" class="form-control" required>
                    <p id="errMsgPrice" class="text-danger"></p>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Qty</label>
                    <input type="number" id="qty" name="qty" min="1" max="10" class="form-control" required>
                    <p id="errMsgQty" class="text-danger"></p>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-success" id="save" type="button">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="scripts/index.js"></script>
</body>
</html>
