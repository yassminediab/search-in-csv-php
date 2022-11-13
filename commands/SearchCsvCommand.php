<?php
include 'command-interface.php';

class SearchCsvCommand implements Command
{
    private $searchUseCase;
    public function __construct(ISearchInCsvUseCase $searchUseCase) {
        $this->searchUseCase = $searchUseCase;
    }

    public function execute() {
        return $this->searchUseCase->search();
    }
}