#PHPGenerateCSV : Generate CSV File from two parameter array
where the first parameter is the title(S) while the second parameter is
the array of data of th csv and third the parmeter is the file name
check example below

```php
<?php
//Use case
$heading_array = ['firstname', 'lastname'];
$data = [['niyi', 'philip'], ['ola', 'dare']];

generateCSVFile($heading_array, $data, 'myfilename');
?>
```
