<?php

interface ISearchInCsvUseCase {
    public function search();
}

class SearchInCsvUseCase implements ISearchInCsvUseCase{
    private $fileName;
    private $index;
    private $searchTerm;
    public function __construct($fileName,$index, $searchTerm) {
        $this->index = $index;
        $this->fileName = $fileName;
        $this->searchTerm = $searchTerm;
    }
    public function search() {
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