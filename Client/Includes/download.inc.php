<?php 

session_start();

$clientsId = $_SESSION["clientsId"];

// Load the database configuration file 
include_once '../../dbh.inc.php';
 
// Fetch records from database 
$query = $conn->query(
   "SELECT *
   FROM users u
   RIGHT JOIN t_results t
       ON u.userId = t.userId
   WHERE u.clientsId = $clientsId;
    "); 

if(empty($query)){ 
    header("location: ../client_page.php?error=empty");
    exit();
}else{
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 

    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 

    // Set column headers 
    $fields = array('userid', 'Név', 'Kitoltes kezdete', 'Email', 'Nyitottsag', 'Lelkiismeret', 'Extroverzio', 'Alkalmazkodas', 'Stressz', 'Kognitiv'); 
    fputcsv($f, $fields, $delimiter); 
    //userId, clientsId, usersVez_nev, registerTime, usersEmail, t_openness, t_conscientiousness, t_extroversion, t_agreeableness, t_neuroticism, cognitrive
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
