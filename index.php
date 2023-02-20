<?php


    require_once __DIR__ . '/php.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $card = new Card();

    global $cardNumber;
        $cardNumber = $_POST['number'];
    $card->validate($cardNumber);


}

?>

<form action="index.php" method="post">
    <input type="text" id="number" name="number"><br><br>
    <input type="submit" value="Submit">
</form>
