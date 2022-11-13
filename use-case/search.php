<?php

interface Command {
    public function execute();
}
class searchInCsv implements Command {
    private $fileName;
    private $index;
    private $searchTerm;
    public function __construct($fileName,$index, $searchTerm) {
        $this->index = $index;
        $this->fileName = $fileName;
        $this->searchTerm = $searchTerm;
    }
    public function execute() {
        $handle = fopen($this->fileName, "r");

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
           if($data[$this->index] == $this->searchTerm) {
               fclose($handle);
               return $data;
           }
        }
        fclose($handle);
        return false;
    }
}