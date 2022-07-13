<?php

require_once "class.php";

function printCard($_movie){
echo "<h4> " ."Title = ". $_movie->getTitle() . "</h4>";
echo "<h4> " . "Genre = ". $_movie->getGenre() . "</h4>";
echo "<h4> " ."Duration = ". $_movie->getDuration() . "</h4>";
echo "<h4> " ."Release Data = ". $_movie->getReleaseData() . "</h4>";


}
// printCard($movie1);
// printCard($movie2);
// printCard($movie3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php printCard($movie1) ?>
      </div>
      <div class="col">
        <?php printCard($movie2) ?>
      </div>
      <div class="col">
        <?php printCard($movie3) ?>
      </div>
      

    </div>

  </div>
  
</body>
</html>