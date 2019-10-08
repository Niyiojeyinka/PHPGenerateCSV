#PHPGenerateCSV : Generate CSV File from two parameter array
where the first parameter is the title(S) while the second parameter is 
the array of data of th csv 
check example below
```php
<?php
//Use case
$heading_array =array('firstname','lastname');
$data = array(array('niyi','philip'),array('ola','dare'));

generateCSVFile($heading_array,$data);
?>
```
