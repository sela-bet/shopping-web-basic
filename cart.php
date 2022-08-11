<?php
session_start();
require './dbcon.php';

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" style="width: 65%">
    <h3></h3>
    <ul class="nav nav-pills">
      <li role="presentation"><a href="index.php">Home</a></li>
      <li role="presentation"><a href="product-create.php">Sell</a></li>
      <li role="presentation"><a href="cart.php">Cart</a></li>
    </ul>
    <hr />
    <h3></h3>
    <div style="clear: both"></div>
    <h3 class="title2">Shopping Cart Details</h3>
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th width="30%">Product Name</th>
          <th width="10%">Quantity</th>
          <th width="13%">Price Details</th>
          <th width="10%">Total Price</th>
          <th width="17%">Remove Item</th>
        </tr>

        <?php
        if (!empty($_SESSION["cart"])) {
          $total = 0;
          foreach ($_SESSION["cart"] as $key => $value) {
        ?>
            <tr>
              <td><?php echo $value["item_name"]; ?></td>
              <td><?php echo $value["item_quantity"]; ?></td>
              <td>$ <?php echo $value["product_price"]; ?></td>
              <td>
                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
              <td><a href="code.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>

            </tr>
          <?php
            $total = $total + ($value["item_quantity"] * $value["product_price"]);
          }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <th align="right">$ <?php echo number_format($total, 2); ?></th>
            <td></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
</body>

</html>