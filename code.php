<?php
session_start();
require_once './dbcon.php';

if (isset($_POST["add"])) {
  if (isset($_SESSION["cart"])) {
    $item_array_id = array_column($_SESSION["cart"], "product_id");
    if (!in_array($_GET["id"], $item_array_id)) {
      $count = count($_SESSION["cart"]);
      $item_array = array(
        'product_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'product_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"],
      );
      $_SESSION["cart"][$count] = $item_array;
      echo '<script>window.location="index.php"</script>';
    } else {
      echo '<script>alert("Product is already Added to Cart")</script>';
      echo '<script>window.location="index.php"</script>';
    }
  } else {
    $item_array = array(
      'product_id' => $_GET["id"],
      'item_name' => $_POST["hidden_name"],
      'product_price' => $_POST["hidden_price"],
      'item_quantity' => $_POST["quantity"],
    );
    $_SESSION["cart"][0] = $item_array;
  }
}

if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION["cart"] as $keys => $value) {
      if ($value["product_id"] == $_GET["id"]) {
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("Product has been Removed...!")</script>';
        echo '<script>window.location="index.php"</script>';
      }
    }
  }
}

if (isset($_POST['sumbmit_product'])) {
  $name = $_POST['name'];
  $image = $_POST['image'];
  $price = $_POST['price'];

  $query = "INSERT INTO product (name,image,price) VALUES ('$name','$image','$price')";
  try {
    $con->exec($query);
    // $_SESSION['message'] = "Employee Created Successfully";
    header("Location: product-create.php");
    exit(0);
  } catch (PDOException $ex) {
    // $_SESSION['message'] = "Employee Not Created";
    header("Location: product-create.php");
    die($ex->getMessage());
  }
}
