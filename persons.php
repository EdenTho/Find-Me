
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="#">
</head>
<body>
<h3>Uploaded Addressbook</h3>
<?php

$file = $_FILES["file"];

try{
    if(isset($file)>0){
    $tmpName = $file["tmp_name"];
    $csvAsArray = array_map('str_getcsv', file($tmpName));
    }
}
catch(exception $e){
    echo "Return Code: " . $file["error"] . "<br />";

}

?>

<p>Please choose a user</p>
<table><div class="csvTable">
<?php
foreach($csvAsArray as $row){
    echo "<tr>"; 
    for ($i = 0; $i <count($csvAsArray) -1; $i++){
    echo "<td>".$row[$i]."</td>";
    }
    echo "</tr>";
}
?>
</table></div>
</body>
</html>
