<?php

  /*
    * if header is called, CMS environment is loaded
    * style's collected by cm-style.php
  */

  /** load CM environment **/
  require(dirname(__FILE__) . '/cm-load.php');

  /** load cm-style.php using preset PATH **/
  require(PATH.'cm-style.php');

  
?>
