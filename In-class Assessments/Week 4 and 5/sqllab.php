<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySQL Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php

    $connect = mysqli_connect(
        "localhost",
        "root",
        "root",
        "http5225lab"
    );

    if (!$connect) {
        echo 'Error code: ' . mysqli_connect_errno();
        exit;
    }

    $query = 'SELECT `Name`, `Hex` from colors';
    $result = mysqli_query($connect, $query);
    ?>

    <div class="container">
        <div class="row">
            <?php
            if (!$result) {
                echo 'Error Message: ' . mysqli_error($connect);
                exit;
            } else {
                echo 'The query found ' . mysqli_num_rows($result);

                foreach ($result as $color) {
                    echo '<div class="col-md-3">
                            <div class="card mt-2 mb-2" style="">
                                <div class="card-header">'
                        . $color['Name'] .
                        '</div>
                         <div class="card-body" style="background-color:' . $color['Hex'] .'">
                            <p class="card-text">' . $color['Hex'] . '</p>
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

</html>