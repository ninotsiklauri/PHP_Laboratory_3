<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N6</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: solid 1px black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="number" name="row"> - M
        <br><br>
        <input type="number" name="col"> - N
        <br><br>
        <input type="number" name="min"> - a
        <br><br>
        <input type="number" name="max"> - b
        <br><br>
        <button type="submit" name="matrix">Matrix</button>
        <br><br>
    </form>
    <?php
    function matrix($rows, $cols, $min, $max)
    {
        $result = [];
        for ($i = 0; $i < $rows; $i++) {
            $temp = [];
            for ($j = 0; $j < $cols; $j++) {
                array_push($temp, rand($min, $max));
            }
            array_push($result, $temp);
        }
        return $result;
    }
    function table($rows = 10, $cols = 10, $min = 10, $max = 99)
    {
        $matrix = matrix($rows, $cols, $min, $max);
        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                echo "<td>";
                    echo $matrix[$i][$j];
                echo "</td>";
            }
            echo "<td style='border:none;'>";
            echo array_sum($matrix[$i]);
            echo "</td>";
            echo "</tr>";
        }
        echo "<tr>";
            for ($i=0; $i < $cols; $i++) { 
                $sum = 0;
                for ($j=0; $j < $rows; $j++) { 
                    $sum += $matrix[$j][$i];
                }
                echo "<td style='border:none;'>";
                echo $sum;
                echo "</td>";
            }
        echo "</tr>";   
        echo "</table>";
    }
    ?>
    <?php
        if (isset($_POST['matrix'])) {
            table($_POST['row'], $_POST['col'], $_POST['min'], $_POST['max']);
        }
    ?>
</body>
</html>