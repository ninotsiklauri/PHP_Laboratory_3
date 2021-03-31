<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N3</title>
    <style>
        table{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="number" name="M"> - შეიყვანეთ რიცხვი
        <br><br>
        <button name="shedareba">შედარება</button>
        <br><br>
    </form>

    <?php
        echo "დამცავი კოდი - ", rand(9999, 99999);
        echo "<br>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $code = intval($_POST['M']);

            if ($code == rand(9999, 99999)) {
                echo "სწორია";
            }else{
                echo "ციფრები არ ემთხვევა დამცავ კოდს";
            }
        }
    ?>
</body>
</html>
