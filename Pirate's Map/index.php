<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pirate's Map</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="background" ></div>
    <div class="head">Find the Cursed Treasure!</div>
  <div class="ship">
    <a href="maps.php?id=<?php echo hash('sha224', '1'); ?>" class="card card1">MAP 1</a>
    <a href="maps.php?id=<?php echo hash('sha224', '2'); ?>" class="card card2">MAP 2</a>
    <a href="maps.php?id=<?php echo hash('sha224', '4'); ?>" class="card card3">MAP 3</a>
  </div>

  <script src="script.js"></script>
</body>
</html>
