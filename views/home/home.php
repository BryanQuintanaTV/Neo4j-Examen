
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Landing Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'>
  <link rel="stylesheet" href="src/css/home_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Start Landing Page -->
      <div class="landing-page">
        <header>
          <div class="container">
            <a href="#" class="logo">Neo4J <b>Examen</b></a>
            <ul class="links">
              <a href=""><li>Home</li></a>
              <li>
              <form method="get" action="index.php">
                <input type="hidden" name="page" value="films">
                <button type="submit">Films</button>
              </form>
              </li>
              <li>page</li>
              <li>
              <form action="index.php" method="post">
                <input type="submit" name="logout" value="Sign Out" />
                </form>
              </li>
              
            </ul>
          </div>
        </header>
        <div class="content">
          <div class="container">
            <div class="info">
              <h1>Examen ABD</h1>
              <p>Welcome <?= $_SESSION["email"]?></button>
            </div>
            <div class="image">
              <img src="https://i.postimg.cc/65QxYYzh/001234.png">
            </div>
          </div>
        </div>
      </div>
      <!-- End Landing Page -->
<!-- partial -->
  
</body>
</html>


<!-- <head>
    <link href="src/css/style.css" rel="stylesheet">
</head> -->

<!-- <h1>Welcome <?= $_SESSION["email"]?>!</h1> -->

<!-- <table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Edit</th>
    </tr>
    <?php while($burger = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $burger['id']; ?></td>
        <td><?= $burger['name']; ?></td>
        <td><?= $burger['description']; ?></td>
        <td>$<?= $burger['price']; ?></td>
        <td>
            <a href="#" data-status='<?= json_encode($burger); ?>' class="btn" type="button">
                <button>Edit</button>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>


<div>
    <form role="form" method="post" action="index.php">
        <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Name" name="name" type="text" autofocus="" required>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Description" name="desc" type="text" value="" required>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="$00.00" step="0.01" name="price" type="number" value=""
                    required>
            </div>
            <div class="text-center">
                <button type="submit">Add Burger</button>
            </div>
            <div class="text-center">
                <label><?= $message ?></label>
            </div>
        </fieldset>
    </form>
</div>

<div>
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="Sign Out" />
    </form>
</div> -->