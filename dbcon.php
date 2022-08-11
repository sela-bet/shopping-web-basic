<?php
define("DSN", "mysql:host=localhost;dbname=product_detail;");
define("USERNAME", 'root');
define("PASSWORD", '');
try {
  $con = new PDO(DSN, USERNAME, PASSWORD);
  $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
  die($err->getMessage());
}
