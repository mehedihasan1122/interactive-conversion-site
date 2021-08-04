<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Page 2</title>
</head>
<body>
<h1>conversion rate</h1>


<a href="home.php">Home</a> 2. <a href="conversion.php">Conversion Rate</a> 3. <a href="history.php">History</a>
 <?php
define("filepath", "data.txt");

$category = $value = $unit "";
$categoryErr = $value = $unitErr "";
$flag = false;
$successfulMessage = $errorMessage = "";


 if($_SERVER['REQUEST_METHOD'] === "POST") {
$category = $_POST['category'];
$value = $_POST['value'];
$unit = $_POST['unit'];
}

if(empty($category)) {
$categoryErr = "Field can not be empty";
$flag = true;
}

if(empty($value)) {
$valueErr = "Field can not be empty";
$flag = true;
}

if(empty($unit)) {
$unitErr = "Field can not be empty";
$flag = true;
}

if(!$flag) {
$fileData = read();
}

 if(empty($fileData)) {
$data[] = array("category" => $category, "value" => $value, "unit" => $unit);
else {
$data[] = json_decode($fileData);
array_push($data, array("category" => $category, "value" => $value, "unit" => $unit));
}

 $data_encode = json_encode($data);
write("");
$res = write($data_encode);
if($res) {
$successfulMessage = "Sucessfully saved.";
}
else {
$errorMessage = "Error while saving.";
}


 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

 function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
?>

 


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">



<label for="category">category<span style="color: red">*</span></label>
<input type="text" id="text" name="text" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<span style="color: blue"><?php echo $categoryErr; ?></span>

<label for="value">value<span style="color: red">*</span></label>
<input type="value" id="number" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<span style="color: blue"><?php echo $valueErr; ?></span>



<label for="unit">unit<span style="color: red">*</span></label>
<input type="unit" id="number" name="number" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<span style="color: blue"><?php echo $unitErr; ?></span>


 <?php

function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
</body>
</html>