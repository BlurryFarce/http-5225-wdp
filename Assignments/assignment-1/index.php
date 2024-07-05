<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top Anime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<?php include './resuable/nav.php'; ?>
<?php include './resuable/conn.php'; ?>

    <div class="container">
        <div class="row">
            <?php
            if (!empty($animes)) {
                foreach ($animes as $anime) {
                    echo
                    '<div class="col-md-3">
                    <div class="card m-2">
                        <div class="card-header text-truncate">'
                        . $anime['Title'] .
                        '</div>
                    <img src="' . $anime['main_picture'] . '" class="card-img-top img-fluid" alt="' . $anime['Title'] . '">
                            <div class="card-body d-flex flex-column">
                               <p class="card-text"><strong>Type:</strong> ' . $anime['Type'] . '</p>
                            <p class="card-text"><strong>Popularity:</strong> ' . $anime['Popularity'] . '</p>
                            <p class="card-text"><strong>Studio:</strong> ' . $anime['Studio'] . '</p>
                            <p class="card-text"><strong>Score:</strong> ' . $anime['Score'] . '</p>
                            <p class="card-text"><strong>Genre:</strong> ' . $anime['Genre'] . '</p>
                        </div>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>