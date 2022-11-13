<?php
include 'use-case/search.php';
include 'commands/SearchCsvCommand.php';

$fileName = $argv[1];
$index = $argv[2];
$searchTerm = $argv[3];
$useCase = new SearchInCsvUseCase($fileName,$index,$searchTerm);
$command = new SearchCsvCommand($useCase);

$user = $command->execute();

if($user){
    echo $user[0].' '.$user[1].$user[2].' '.$user[3];
} else {
    echo 'User Not Found';
}