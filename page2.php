<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N2</title>
    <style>
        table{
            border: solid 1px black;
            border-collapse: collapse;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="number" name="M"> - M
        <br><br>
        <input type="number" name="N"> - N
        <br><br>
        <input type="number" name="a"> - a
        <br><br>
        <input type="number" name="b"> - b
        <br><br>
        <button name="Table">Table</button>
        <br><br>
    </form>

    <?php
        function table($M, $N, $a, $b){
            $table = "<table border='1' >";
            for($i = 0; $i < $N; $i++){
                $table .= "<tr>";
                    for($j = 0; $j < $M; $j++){
                        $table .= '<td>' . rand($a, $b) . '</td>';
                    }
                $table .= "<tr>";
            }
            $table .= "<table>";
            return $table;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $width = intval($_POST['M']);
            $height = intval($_POST['N']);
            $max_rand = intval($_POST['b']);
            $min_rand = intval($_POST['a']);

            if ($width <= 0 || $height <= 0 || $max_rand <= 0 || $min_rand <=0) {
                echo "რიცხვები არ უნდა იყოს 0-ის ტოლი ან 0-ზე ნაკლები";
            }else{
                echo table($width, $height, $min_rand, $max_rand);
            }
        }
    ?>
</body>
</html>