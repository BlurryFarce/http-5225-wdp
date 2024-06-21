<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    

    ?>
    <?php
    function getUsers()
    {
        $url = 'users.json';
        $data = file_get_contents($url);

        return json_decode($data, true);
    }

    $users = getUsers();
    ?>
    <div class="container">
        <div class="row">

            <?php
            if (!empty($users)) {
                foreach ($users as $user) {
                    echo
                    '<div class="col-md-3">
                        <div class="card mt-2 mb-2" style="">
                            <div class="card-header">'
                        . $user['name'] .
                        '</div>
                                <div class="card-body">
                                    <p class="card-text">' . $user['email'] . '</p>
                                    <p class="card-text">' . $user['phone'] . '</p>
                                    <p class="card-text">' . $user['address']['city'] . '</p>
                                    <p class="card-text">' . $user['website'] . '</p>
                                    <p class="card-text">' . $user['company']['name'] . '</p>
                            </div>
                        </div>
                    </div>';

                    // echo $users[$i]['name'];
                    // echo '<br>';
                }
            }
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>