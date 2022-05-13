<?php ob_start(); ?>

<h1>Home</h1>

<?php
$content = ob_get_clean();
require 'layout.php';

if (isset( $_POST['submit'] )) {
    echo $_POST['bla'];
}