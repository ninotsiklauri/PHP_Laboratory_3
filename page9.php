<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N9</title>
</head>
<body>
    <form method="post">
        <input type="password" name="pass"> - Password
        <br><br>
        <button type="submit" name="check">Check</button>
        <br><br>
    </form>
    <?php
        function check_password($paroli)
        {
            if (strlen($paroli) < 8 || preg_match("/[a-z]+/", $paroli))
            {
                $status = "პაროლი ძალიან სუსტია";
            }
            if (strlen($paroli) > 8 && preg_match("/[a-z]+/", $paroli) && 
            preg_match('/[A-Z]+/', $paroli))
            {
                $status = "პაროლი ნორმალურია";
            }
            if (strlen($paroli) > 8 && preg_match("/[a-z]+/", $paroli) && 
            preg_match('/[A-Z]+/', $paroli) && preg_match("/[0-9]+/", $paroli))
            {
                $status = "პაროლი ძალიან ძლიერია";
            }
            return $status;
        }
        if (isset($_POST['check'])) {
            echo check_password($_POST['pass']);
        }
    ?>
</body>
</html>