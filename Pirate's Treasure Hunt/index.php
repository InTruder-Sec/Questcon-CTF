<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pirate's Treasure Hunt</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php
    // Check if user is a pirate
    $isPirate = strpos($_SERVER['HTTP_USER_AGENT'], 'pirate') !== false;

    // Check if user came from Black Perl
    $cameFromBlackPerl = strpos($_SERVER['HTTP_REFERER'], 'Black Perl') !== false;

    // Check if user is authenticated as Jack Sparrow
    $authenticated = isset($_COOKIE['user']) && $_COOKIE['user'] === 'jack sparrow';

    if ($isPirate === false) {
        setcookie('user', 'barbossa', time() + (86400 * 30), "/"); // Set to Barbossa
      }

    // Update the cookie if authenticated as Jack Sparrow
    if ($authenticated) {
      setcookie('user', 'jack sparrow', time() + (86400 * 30), "/"); // Extend the cookie
    }
    if ($isPirate) {
      if (!$cameFromBlackPerl) {
        echo '<div class="message">You should come from the ship Black Perl to access this treasure!</div>';
      } else {
        if (!$authenticated) {
          echo '<div class="message">Prove your identity to access the treasure!</div>';
        } else {
            echo '<div>QUESTCON{Thr33_k33p_a_s3cr3t_if_2_of_th3m_ar3_dead}</div>';
        }
      }
    } else {
      echo '<div class="message">You should have a pirate browser to access this site!</div>';
    }
  ?>

</body>
</html>
