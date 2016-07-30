<?php

  /**

  * cm-style gets current URL, strips it to file name, returning the first value of $name
  * this allows us to dynamically reference relevant stylesheets automatically
  * styleOptions loads stylesheets from an Array

  **/
  $ref = $_SERVER['PHP_SELF'];
  preg_match('/(\w*.php)|(\w*.html)/', $ref, $match);
  $name = str_replace(
    array('.php', '.html'),
    array('', ''),
    $match[0]
  );

  function styleOptions(&$array){
    if(!empty($array)){
      foreach($array as $style){
        $link = '<link rel="stylesheet" type="text/css" href="assets/styleOptions/'.$style.'.css">';
        echo $link;
      }
    }
  }
?>
