<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R U PHP?</title>
    <script src="script.js"></script>
</head>
<body>

<h2>Do you like PHP?</h2>

<form method="post" onsubmit="return confirmSubmission()">
    <input type="radio" name="like_php" value="yes"> Yes
    <input type="radio" name="linke_php" value="no"> No
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the user has selected an option
        if(isset($_POST['like_php'])) {
            $like_php = $_POST['like_php'];

            if($like_php === "yes") {
                //If user likes PHP
                echo "<p>Oh, you like PHP! How original....</p>";
            } elseif($like_php === "no") {
                //If you dont like PHP :(
                echo "<p>Oh no, you don't like PHP?!?!?</p>";
            }
            }   
        }

?>

</body>
</html>