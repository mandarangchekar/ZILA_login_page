<?php
session_start();

if (!isset($_SESSION['username'])){
    header('location:login.php');
}
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Home page</title>
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>WELCOME <?php echo $_SESSION['username']; ?></h1>
            <h1>Track Orders here:</h1>

<!-- code for  Dropdown -->
<form action="">



  <select name="id" style="padding:12px 10px; " class="btn btn-warning btn-large track-btn" id="id">
    <option value="volvo">Placed</option>
    <option value="saab">Shipped</option>
    <option value="opel">Delivered</option>
    <option value="audi">Returned</option>

  </select>
  <br><br>
  <input type="submit" name="search" style="padding:12px 10px; " class="btn btn-warning btn-large submit-btn" value="Submit">
</form>

<!-- code for tables -->
<table class="table table-dark">
<thead>
<tr>

<th scope="col">Product Name</th>
<th scope="col">Product ID</th>
<th scope="col">Order Status</th>
</tr>
</thead>
<tbody>

    <?php
         include 'validation.php';



         $selectquery = "select * from orders";
         $query = mysqli_query($con,$selectquery);

         while ($res = mysqli_fetch_array($query)) {
         ?>

         <tr>
             <td><?php echo $res['product_name']; ?></td>
             <td><?php echo $res['product_id']; ?></td>
             <td><?php echo $res['product_status']; ?></td>

         </tr>
         <?php
        }
        ?>
</tbody>
</table>


            <a class="btn btn-lg btn-primary" href="logout.php">LOGOUT</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
 </html>
