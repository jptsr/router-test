<?php 

    ob_start();

?>

<h1>login</h1>

<?php

$content = ob_get_clean();
require 'layout.php';

