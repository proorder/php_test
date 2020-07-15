<?php

$link = $_GET['link'];

if (preg_match('/https?.+/', $link)) {
  $file = file_get_contents($link);
  preg_match_all('/<a href=[\'"]([^\'^"]+).+>/', $file, $match);

  foreach($match[1] as $el) {
    echo "$el<br />";
  }
}
