<?php

$db = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d3fmoqhijn278b', 'bucrjmolqcpjoo', '7488cefd06f0942075be16c3c73fe5ae9106b5e8bb75ecffcf400ce3ea85e3e5');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$req=$db->query("SELECT * FROM employees");
var_dump($req->fetchAll());
?>
