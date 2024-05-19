<head>
    <link href="/src/css/film_style.css" rel="stylesheet">
</head>

<h1>Welcome <?= $_SESSION["email"]?>!</h1>

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
    <?php if (!empty($data)): ?>
    <?php foreach ($data as $film): ?>
    <tr>
        <td><?= $film['film_id']; ?></td>
        <td><?= $film['title']; ?></td>
        <td><?= $film['description']; ?></td>
        <td>$<?= $film['categoria']; ?></td>
        <td>$<?= $film['release_year']; ?></td>
        <td>$<?= $film['idioma']; ?></td>
        <td>$<?= $film['rental_duration']; ?></td>
        <td>$<?= $film['rental_rate']; ?></td>
        <td>$<?= $film['length']; ?></td>
        <td>$<?= $film['replacement_cost']; ?></td>
        <td>$<?= $film['rating']; ?></td>
        <td>$<?= $film['special_features']; ?></td>
        <td>$<?= $film['actor']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
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
</div>