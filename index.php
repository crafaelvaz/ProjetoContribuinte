<?php

require_once("class/database.class.php");

$con = new Database();
$link = $con->getConexao();

$smtm = $link->prepare("select * from pessoa");
$smtm->execute();

$data = $smtm->FetchAll();

print_r($data);

echo "conectado sucesso";
