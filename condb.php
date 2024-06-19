<?php

$pdo = new PDO("mysql:host=localhost;dbname=pawszone", "root", "");
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlUnnamed = "SELECT * FROM WHERE owner = ? AND petname = ?";
$sqlNamed = "SELECT * FROM WHERE owner = ':owner' AND petname = ':petname'";
$preparedUnnamed = $pdo->prepare($sqlUnnamed);
$preparedNamed = $pdo->prepare($sqlNamed);
$preparedUnnamed -> bindvalue(1, "Naod");
$preparedUnnamed -> bindvalue(2, "Buchi");
$preparedNamed -> bindvalue(":owner", "Naod");
$preparedNamed -> bindvalue(":petname", "Buchi");


$sqlUnnamed = "SELECT * FROM WHERE owner = ?";
$preparedUnnamed = $pdo->prepare($sqlUnnamed);
$preparedUnnamed -> bindvalue(1, "Naod");
$preparedUnnamed -> execute();