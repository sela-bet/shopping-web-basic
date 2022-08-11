<?php
session_start();
require './dbcon.php';

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        * {
            font-family: 'Titillium Web', sans-serif;
        }

        .product {
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        table,
        th,
        tr {
            text-align: center;
        }

        .title2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        h2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        table th {
            background-color: #efefef;
        }
    </style>
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
        <h4>Top Product</h4>
        <?php
        $query = "SELECT * FROM product ORDER BY id ASC ";
        $stmt = $con->query($query);


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        ?>
            <div class="col-md-4">

                <form method="post" action="code.php?id=<?php echo $row["id"]; ?>">

                    <div>
                        <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                        <h4 class="text"><?php echo $row["name"]; ?></h4>
                        <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                        <input type="text" name="quantity" class="form-control" value="1">
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                    </div>
                </form>
            </div>
        <?php
        }

        ?>



    </div>


</body>

</html>