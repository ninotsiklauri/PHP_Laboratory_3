<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N7</title>
</head>
<body>
    <form method="post">
        <input type="number" name="M"> - M
        <br><br>
        <input type="number" name="a"> - a
        <br><br>
        <input type="number" name="b"> - b
        <br><br>
        <button type="submit" name="vec">Vec</button>
        <br><br>
    </form>
    <?php
        function func7($M, $a, $b)
        {
            $temp = array();
            for ($i=0; $i < $M; $i++)
            {
                array_push($temp, array(rand($a, $b)));
            }
            return $temp;
        }
        var_dump(func7($_POST['M'], $_POST['a'], $_POST['b']));
    ?>
</body>
</html>