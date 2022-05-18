<?php
require_once('Model_Fuseau.php');

$fuseau = htmlspecialchars($_GET['search']);

$root = new Fuseau();

$tab = $root->searchstart($fuseau);

?>