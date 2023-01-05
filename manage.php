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
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Crud-app</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage.php">Show-Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container mt-2">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">product</th>
      <th scope="col">price</th>
      <th scope="col">qty</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
         while($row = mysqli_fetch_assoc($query)){

            echo "<tr><td>".$row["id"]."</td>";

            echo "<td>".$row["product_name"]."</td>";
            echo "<td>".$row["price"]."</td>";
            echo "<td>".$row["qty"]."</td>";
            echo "<td><button class='btn btn-danger'>delete</button></td></tr>";
            }
    ?>
    <tr>
      
    </tr>
   
  </tbody>
</table>
        </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="scripts/index.js"></script>
</body>
</html>
