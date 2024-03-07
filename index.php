<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Products</title>
</head>

<body>
    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <th scope="col">Name</th>
                <th scope="col">Price2</th>
            </thead>
            <tbody>
                <?php
                $data = require_once './functions/getData.php';
                foreach ($data as $value) {
                    echo '<tr>';
                    echo '<th>' . $value['name'] . '</th>';
                    echo '<th>' . $value['price2'] . '</th>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>