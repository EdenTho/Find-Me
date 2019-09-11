<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="#">
</head>
<body>
<p>Select File</p>
<div class="upload">
    <form class="add-file" action="persons.php" method="post" enctype="multipart/form-data">
        <input type="file" accept=".csv" name="file" id="file" required>
        <input type="submit" value="Submit" class="submit">
    </form>
</div>

</body>
</html>