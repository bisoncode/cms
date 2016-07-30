<?php

/**

  * This file sets the path constant
  * loads dynamic cm-CSS php file
  * loads the config file, which loads settings.

**/

define( 'PATH', dirname(__FILE__) . '/' );

/** load cm-style.php using preset PATH **/
require(PATH.'cm-style.php');

?>
