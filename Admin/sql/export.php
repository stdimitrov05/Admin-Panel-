<?php 
 
// Load the database configuration file 
include_once 'config.php'; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM employee  ORDER BY userid ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "ExportDB" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('id','first_name','last_name','city_name','email','Info'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
      
        $lineData = array($row['userid'], $row['first_name'], $row['last_name'], $row['city_name'],$row['email'],$row['text']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>