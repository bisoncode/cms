<?php
  $ref = $_SERVER['PHP_SELF'];
  preg_match('/(\w*.php)|(\w*.html)/', $ref, $match);
  $name = str_replace(
    array('.php', '.html'),
    array('', ''),
    $match[0]
  );
?>
