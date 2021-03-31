<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1</title>
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
    <?php
        function table(){
            $table = "<table border='1'>";
            for($i = 0; $i < 10; $i++){
                $table .= "<tr>";
                    for($j = 0; $j < 10; $j++){
                        $table .= '<td>' . rand(10, 99) . '</td>';
                    }
                $table .= "<tr>";
            }
            $table .= "<table>";
            return $table;
        }
        echo table();
    ?>
</body>
</html>
