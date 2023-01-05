<?php 
require_once('server/db.php');

$sql = "SELECT * FROM products";
$query = mysqli_query($conn, $sql);

?>
<html>
<head>
    <title>Crud App | manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <!--navbar section-->
    <?php require_once('navbar.php'); ?>
    <div class="container mt-2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($row = mysqli_fetch_assoc($query)){
                    
                    echo "<tr><td>".$row["id"]."</td>";
                        
                        echo "<td>".$row["product_name"]."</td>";
                        echo "<td>".$row["price"]."</td>";
                        echo "<td>".$row["qty"]."</td>";
                        echo "<td>
                            <button class='btn btn-danger'>Delete</button>
                            <button class='btn btn-warning'>Edit</button>
                        </td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="scripts/index.js"></script>
    </body>
    </html>
    