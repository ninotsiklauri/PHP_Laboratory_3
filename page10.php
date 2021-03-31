<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N10</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="check">Check if url contain numbers</button>
        <br><br>
    </form>
    <?php
        function check_if_url_contain_numbers (){
            return preg_match('/\\d/', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") > 0;
        }
        if (isset($_POST['check'])) {
            if (check_if_url_contain_numbers()){
                echo "url ნამდვილად შეიცავს ციფრებს";
            }else{
                echo "url არ შეიცავს ციფრებს";
            }
        }
    ?>
</body>
</html>