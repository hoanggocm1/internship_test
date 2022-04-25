<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cau 1.B</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Index</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link pr-5 pl-5" href="cau1_a.php">Câu 1_a</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link pr-5" href="cau1_b.php">Câu 1_b</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link pr-5" href="cau2.php">Câu 2</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <div class="bg-info text-white" style="height:625px; font-size: 40px;padding: 100px;">

        <?php

        function findFrequent($array_1)
        {
            for ($i = 0; $i < count($array_1); $i++) {
                if ($array_1[$i] === null) {
                    $array_1[$i] = 'null';
                } elseif (($array_1[$i] === false)) {
                    $array_1[$i] = 'false';
                } elseif (($array_1[$i] === true)) {
                    $array_1[$i] = 'true';
                }
            }
            $source_array = '[';
            for ($i = 0; $i < count($array_1); $i++) {
                if ($i ==  count($array_1) - 1) {
                    $source_array .= $array_1[$i] . ']';
                } else {
                    $source_array .= $array_1[$i] . ', ';
                }
            }
            echo '<h3 >Cho mảng: ' . $source_array . ' </h3>';

            echo '<h3 class="pt-5">Phần tử xuất hiện nhiều lần nhất trong mảng:</h3>';
            $b = (array_count_values($array_1));
            $max = max($b);
            foreach ($b as $key => $c) {
                if ($c == $max) {
                    echo $key;
                }
            }
        }


        findFrequent([false, "up", "down", "left", "right", true, false]);
        ?>
    </div>

</body>

</html>