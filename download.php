<?php
// Downloads files

$host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "placement_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 



if (isset($_GET['usn'])) {
    $usn = $_GET['usn'];

    // fetch file to download from database
    $sql = "SELECT * FROM resume WHERE usn='$usn'";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $file['resume_file'];
	
	$change=str_replace("C:fakepath","","$filepath");
	
//echo $change;
    if (file_exists($change)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($change));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
       // header('Content-Length: ' . filesize('upload/' . $file['resume_file']));
       // readfile('upload/' . $file['resume_file']);
		header('Content-Length: ' . filesize($change));
        readfile($change);

        // Now update downloads count
      //  $newCount = $file['downloads'] + 1;
      //  $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
      //  mysqli_query($conn, $updateQuery);
      //  exit;
    }

}

/*
header("Content-Type: application/octet-stream");

//$change=str_replace("C:fakepath","",'.$_GET["file"].');

//$file = $_GET["file"] .".pdf";
//$file = $change .".pdf";
//$file="localhost/phpmyadmin/CamScanner%2006-29-2021%2020.47.35.pdf";
//$file="localhost/phpmyadmin/sql.php?db=placement_db&table=resume&pos=0/CamScanner%2006-29-2021%2020.47.35.pdf";
$file="localhost/phpmyadmin/sql.php?db=placement_db&table=resume&pos=0&resume_file=CamScanner%2006-29-2021%2020.47.35.pdf";

header("Content-Disposition: attachment; filename=" . urlencode($change));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($change));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp);

*/












   $conn->close();
	exit;
?>
