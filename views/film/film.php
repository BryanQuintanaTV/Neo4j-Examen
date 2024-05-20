<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Sortable Tabular Data</title>
    <link rel="stylesheet" href="src/css/film_style.css">

</head>

<body>
    <!-- partial:index.partial.html -->

    <body>
        <div id="wrapper">
            <h1>Tabla Films</h1>

            <table id="keywords" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Release_year</th>
                        <th>language</th>
                        <th>Rental Duration</th>
                        <th>Rental_rate</th>
                        <th>Length</th>
                        <th>Replacement Cost</th>
                        <th>Rating</th>
                        <th>Special Features</th>
                        <th>Actor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)) : ?>
                        <?php foreach ($data as $film) : ?>
                            <tr>
                                <td class="lalign"><?= $film['film_id']; ?></td>
                                <td><?= $film['title']; ?></td>
                                <td><?= $film['description']; ?></td>
                                <td><?= $film['categoria']; ?></td>
                                <td><?= $film['release_year']; ?></td>
                                <td><?= $film['idioma']; ?></td>
                                <td><?= $film['rental_duration']; ?></td>
                                <td><?= $film['rental_rate']; ?></td>
                                <td><?= $film['length']; ?></td>
                                <td>$<?= $film['replacement_cost']; ?></td>
                                <td><?= $film['rating']; ?></td>
                                <td><?= $film['special_features']; ?></td>
                                <td><?= $film['actores']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="11">No Se Encontraron Los Datos</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>

            <div class="botones">
                <div>
                    <form method="post" action="">
                        <button type="submit" name="refresh">Refrescar</button>
                    </form>
                </div>

                <div>
                    <form action="index.php" method="post">
                        <input type="submit" name="logout" value="Sign Out" />
                    </form>
                </div>
            </div>

        </div>
    </body>
    <!-- partial -->
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script>
    <script src="src/scripts/script.js"></script>

</body>

</html>





<!-- <head>
    <link href="../../src/css/film_style.css" rel="stylesheet">
</head>

<h1>Welcome <?= $_SESSION["email"] ?>!</h1>

<table>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Category</th>
        <th>Release_year</th>
        <th>language</th>
        <th>Rental Duration</th>
        <th>Rental_rate</th>
        <th>Length</th>
        <th>Replacement Cost</th>
        <th>Rating</th>
        <th>Special Features</th>
        <th>Actor</th>
    </tr>
    <?php if (!empty($data)) : ?>
    <?php foreach ($data as $film) : ?>
    <tr>
        <td><?= $film['film_id']; ?></td>
        <td><?= $film['title']; ?></td>
        <td><?= $film['description']; ?></td>
        <td><?= $film['categoria']; ?></td>
        <td><?= $film['release_year']; ?></td>
        <td><?= $film['idioma']; ?></td>
        <td><?= $film['rental_duration']; ?></td>
        <td><?= $film['rental_rate']; ?></td>
        <td><?= $film['length']; ?></td>
        <td>$<?= $film['replacement_cost']; ?></td>
        <td><?= $film['rating']; ?></td>
        <td><?= $film['special_features']; ?></td>
        <td><?= $film['actor']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="11">No Se Encontraron Los Datos</td>
        </tr>
    <?php endif; ?>
</table>


<div>
<form method="post" action="">
        <button type="submit" name="refresh">Refrescar</button>
    </form>
</div>

<div>
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="Sign Out" />
    </form>
</div> -->