<?php
include 'use-case/search.php';

$fileName = $argv[1];
$index = $argv[2];
$searchTerm = $argv[3];
$useCase = new searchInCsv($fileName,$index,$searchTerm);

$user = $useCase->execute();

if($user){
    echo $user[0].' '.$user[1].$user[2].' '.$user[3];
} else {
    echo 'User Not Found';
}