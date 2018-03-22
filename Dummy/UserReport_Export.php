<?php
require 'dbconfig/config.php';
$setSql="select * from contacts";
$setrec=mysqli_query($conn,$setSql);

$columnHeader = '';  
$columnHeader = "Name" . "\t" . "Contact no" . "\t" . "Telephone No" . "\t"; 

while ($rec = mysqli_fetch_row($setrec)) {  
    $rowData = '';  
    
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .=trim($rowData)."\n";
     
}  


header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
?>