<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
  foreach($quotes as $quote)
  {  ?>
    <div class="quote">
        <h1><?= $quote['author'] ?></h1>
        <p><?= $quote['quote'] ?></p>
    </div>
<?php
  }  ?>
</body>
</html>
