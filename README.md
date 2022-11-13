

Search in CSV file
The main idea for this task is to provide a script to search in csv file using the file path , search index and search term , if the record is exist will return the result

Technologies
PHP Native
Requirements
Install PHP

Installation
Clone project

git clone git@github.com:yassminediab/search-in-csv-php.git
yarn install
Run Search script
php index.php [path/to/file] [index] [term] 
Task Explanation
Implement a script to search in csv file

I Created a command using command design pattern to execute the command
I Created usecase to search in csv file , will open the file then stream the file to get the data
You can search by index and search term to return the result
