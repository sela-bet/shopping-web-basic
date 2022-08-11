<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Sell</title>
</head>

<body>

  <div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="product-create.php">Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h4></h4>
    <hr />

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Sell Product
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="POST">

              <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="mb-3">
                <label>Image path</label>
                <input type="text" name="image" class="form-control">
              </div>
              <div class="mb-3">
                <label>Price</label>
                <input type="text" name="price" class="form-control">
              </div>

              <div class="mb-3">
                <button type="submit" name="sumbmit_product" class="btn btn-primary">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>