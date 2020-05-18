<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/css/main.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php-snack 1</title>
</head>
<body>
  <!-- SNACK 1 - START -->
  <?php
  $matches=[
    [
      'home' => 'Olimpia Milano',
      'away' => 'Fortidudo Bologna',
      'score_home' => 101,
      'score_away' => 90
    ],
    [
      'home' => 'Pesaro',
      'away' => 'Virtus Roma',
      'score_home' => 98,
      'score_away' => 110
    ],
    [
      'home' => 'Varese',
      'away' => 'Cantù',
      'score_home' => 89,
      'score_away' => 100
    ],
    [
      'home' => 'Treviso',
      'away' => 'Venezia',
      'score_home' => 110,
      'score_away' => 90
    ]
  ]
  ?>

  <h1>Snack #1</h1>

  <ul>
    <?php for($i=0;$i < count($matches);$i++) { ?>
      <li>
        <?php echo $matches[$i]['home']?> - <?php  echo $matches[$i]['away']?> |
        <?php echo $matches[$i]['score_home'] ?> - <?php echo $matches[$i]['score_away'] ?>
      </li>
    <?php } ?>
  </ul>
  <!-- SNACK 1 - END -->
<hr>

<!-- SNACK 2 - START -->
<h1>Snack #2</h1>
<?php
$data = $_GET;

if(empty($data['mail'])){
  echo '<div> Il campo mail è vuoto </div>';
} elseif(strlen($data['mail']) < 3) {
  echo '<div> C\'è almeno un errore nel tuo indirizzo email </div>';
} elseif(strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false) {
  echo '<div> C\'è almeno un errore nel tuo indirizzo email </div>';
} else {
  echo '<div> mail ok </div>';
}
?>

  <script src='dist/js/main.js'>
  </script>
</body>
</html>
