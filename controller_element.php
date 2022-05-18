<?php
require_once('Model_Fuseau.php');

$id = $_GET['id'];

$root = new Fuseau();


$tab = $root->resultelement($id);

?>