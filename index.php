<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Multi table</h1>
        <label for="number">Enter a number</label>
        <input type="text" name="number"><br><br>
        <button type="submit">Submit</button><br><br>
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number"])) {
        $number = $_POST["number"];
        function my_f($num)
        {
            for ($i = 1; $i <= 10; $i++) {
                $result = $num * $i;
                echo "$num * $i = $result<br>";
            }
        }
        my_f($number);
    }
}
?>