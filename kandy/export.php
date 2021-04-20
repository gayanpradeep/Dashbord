<?php
include_once 'db_con.php';


$sql = "SELECT month,titarget,achivetarget,starrtarget,starrachivetarget FROM titarget_db WHERE tirange='$tirange' "; 
$setRec = mysqli_query($conn, $sql);
$columnHeader = ''; 
$columnHeader = "Month" . "\t" ."TI Target" . "\t" . "Achive Target" . "\t" ."STaRR Target" . "\t" ."STaRR Achive Target";
$setData = '';
    while ($rec = mysqli_fetch_row($setRec)) {
        $rowData= '' ;
        foreach ($rec as $value){
            $value = '"' . $value . '"' . "\t";  
            $rowData .= $value; 
        }
        $setData .= trim($rowData) . "\n"; 
    }

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Kandy.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
    
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
    


?>