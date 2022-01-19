<?php 



session_start();

$clientsId = $_SESSION["clientsId"];


// Load the database configuration file 
include_once '../../dbh.inc.php';
 
// Fetch records from database 
$query = $conn->query(
   "SELECT * 
    FROM users u
    INNER JOIN t_results t
        ON u.clientsId = t.clientsId 
    WHERE u.clientsId=$clientsId AND t.clientsId=$clientsId
    "); 
 
if(empty($query)){ 
    header("location: ../siker_login.php?error=error");
    exit();
}else{
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Azonosito', 'Vezeteknev', 'Kitoltes kezdete', 'Email', 'Nyitottsag', 'Lelkiismeret', 'Extroverzio', 'Alkalmazkodas', 'Stressz', 'Kognitiv'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
    $lineData = array($row['userId'], $row['usersVez_nev'], $row['registerTime'], $row['usersEmail'], $row['t_openness'], $row['t_conscientiousness'], $row['t_extroversion'], $row['t_agreeableness'], $row['t_neuroticism'], $row['cognitrive']); 
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







<?php 

/*



$query = $conn->query(
   "SELECT * 
    FROM users u
    INNER JOIN t_results t
        ON u.clientsId = t.clientsId 
    WHERE clientsId='" .$clientsId. 
    "'"); 




session_start();

$clientsId = $_SESSION["clientsId"];

// Load the database configuration file 
include_once '../../dbh.inc.php';

$host = 'localhost';
$user = 'mysqluser';
$pass = 'mysqluser';
$db = 'Resources';
$table = 'users';
$file = 'export';





$query = $conn->query(
   "SELECT * 
    FROM users u
    INNER JOIN t_results t
        ON u.clientsId = t.clientsId 
    WHERE clientsId='" .$clientsId. 
    "'");

while ($rowr = mysql_fetch_row($query)) {
    for ($j=0;$j<$i;$j++) {
        $csv_output .= $rowr[$j].", ";
    }
    $csv_output .= "\
";
}

$filename = $file."_".date("Y-m-d_H-i",time());
header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header("Content-disposition: filename=".$filename.".csv");
print $csv_output;
exit;

*/