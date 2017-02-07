<?php include_once 'AES.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AES encription</title>
</head>
<body>






<?php 
$errorKey = $errorData = $dataSet = $result = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$operation = $_POST['operation'];
		$dataSet = true;
	if(empty($_POST['key'])){
		$dataSet = false;
		$errorKey = "You have to enter at least 1 symbol. ";
		$key = "";
	}else{
		$key = $_POST['key'];
	}
	if(empty($_POST['data'])){
		$dataSet = false;
		$errorData = "You have to enter a data for encription"; 
		$data = "";
	}else{
		$data = $_POST['data'];
	}
	if (!empty($_POST['encBit'])){
		$encBit = $_POST['encBit'];
	}

	if ($dataSet === true) {
		$aes = new AES($data, $key, $encBit);
	

		if ($operation == "encrypt" && $dataSet === true) {
			// encription code here
			$enc = $aes->encrypt();
			$aes->setData($enc);
			$result = $enc;
	// ...........................

		} elseif ($operation == "decrypt" && $dataSet === true) {
			// decription code here
			$dec = $aes->decrypt();
			$result = $dec;
	    }
	}











echo "<br>type: $operation <br>";
echo "key: $key<br>";
echo "data: $data <br>";
echo "bits: $encBit<br>";



}
 ?>







<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">

	<p>Enter encription key:</p>
	<input type="text" name="key" id="key">
<span><?php echo $errorKey; ?></span>
	<p>Enter your data for encription</p>
	<textarea name="data" id="data" cols="80" rows="15" id="data"></textarea><br>
	<span><?php echo $errorData; ?></span>
	<p>Choose the level of encription</p>
 	<select name="encBit" id="encBit">
 		<option value="128">128 Bit</option>
 		<option value="192">192 Bit</option>
 		<option value="256">256 Bit</option>
 	</select><br><br>
 	<input name="operation" type="submit" value="encrypt" id="submitBtn">
 	<input name="operation" type="submit" value="decrypt" id="submitBtn">
</form>






<div class="show-result">
	<span id=result><?php echo $result; ?></span>
</div>


</body>
</html>