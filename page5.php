<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N5</title>
</head>
<body>
    <?php
        function task5($n){
            $sum = 0;
            while($n){
                $n = floor($n / 10);
                $sum++;
            }
            return $sum;
        }
        echo task5(456);
    ?>
</body>
</html>