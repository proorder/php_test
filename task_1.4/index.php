<?php

$filename = __DIR__ . "/data.json";

$result = [];
if (file_exists($filename))
    $result = json_decode (file_get_contents ($filename), true);

if ($_GET['set_viewed']) {
  for ($i = 0; $i < count($result); $i++) {
    if ($result[$i]['id'] == $_GET['set_viewed']) {
      $result[$i]['viewed'] += 1;
    }
  }
  if (file_exists($filename)) {
    file_put_contents( $filename, json_encode($result, JSON_PRETTY_PRINT) );
  }
}

?>

<? foreach ($result as $item): ?>
<div>
    <b><?=$item['name']?></b><br>
    <small>Viewed: <?=$item['viewed']?></small><br>
    <?=$item['text']?><br><br>
    <a href="?set_viewed=<?=$item['id']?>">I watched</a>
    <hr>
</div>
<? endforeach; ?>
