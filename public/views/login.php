<?php ob_start(); ?>

<h1>login</h1>

<form action="/menu-principal" method="POST">
    <label for="bla">
        Blabla
        <input type="text" name="bla">
    </label>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
$content = ob_get_clean();
require 'layout.php';