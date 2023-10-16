<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pirate's map</title>
  <link rel="stylesheet" href="maps.css">
</head>
<body>
<?php
$hashed_id = $_GET['id'];

$riddles = [
    "What's a pirate's favorite letter? You might think it's R, but it be the C! The cursed treasure is hidden, find me if you can!",
    "What has a heart that doesn't beat? The cursed treasure! The cursed treasure is hidden, find me if you can!",
    "Dead men tell no tales, but they do leave behind hidden codes. What be it? The black spot! The cursed treasure is hidden, find me if you can!",
];

// Check if the hashed ID matches the skipped number (3)
echo '<div class="background" ></div>';

if ($hashed_id === hash('sha224', '3')) {
    echo "<h1>Congratulations!</h1>";
    echo "<p>You found the treasure map! Navigate your way to the treasure's location.</p>";

    // Ask for username and password if ID is 3
    echo "<form action='' method='GET' class='verification-form'>";
    echo "<input type='hidden' name='id' value='4cfc3a1811fe40afa401b25ef7fa0379f1f7c1930a04f8755d678474'>";
    echo "<h2>Verify Your Identity</h2>";
    echo "<label for='username'>Username:</label>";
    echo "<input type='text' id='username' name='username' required><br>";
    echo "<button type='submit'>Verify</button>";
    echo "</form>";

    if (isset($_GET['username'])) {
      $username = $_GET['username'];

      if ($username === 'Barbossa') {
        echo "<p class='success-message'>Identity verified! Proceed to claim the treasure.</p>";
        echo "<pclass='success-message'>QUESTCON{Th3_Pir4t3s_0f_Th3_Car1bb34n_Arr_Th3_B3st!}</pclass=> ";
      } else {
        echo "<p class='error-message'>Incorrect username or password. No need to bruteforce, Keep searching!</p>";
      }
    }
} else if ($hashed_id === hash('sha224', '1')) {
  echo $riddles[0];
} else if ($hashed_id === hash('sha224', '2')) {
    echo $riddles[1];
    } else if ($hashed_id === hash('sha224', '4')) {
        echo $riddles[2];
        } else {
            echo "<h1>Arrrrr!</h1>";
            echo "<p>Ye be lost, matey!</p>";
        }




?>

</body>
</html>
