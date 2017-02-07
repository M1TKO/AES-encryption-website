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
		$errorData = "You have to enter a data for encryption"; 
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
			// encryption code here
			$enc = $aes->encrypt();
			$aes->setData($enc);
			$result = $enc;
		} elseif ($operation == "decrypt" && $dataSet === true) {
			// decription code here
			$dec = $aes->decrypt();
			$result = $dec;
	    }
	}
	echo "type:  $operation <br>";
	echo "key:  $key<br>";
	echo "data:  $data <br>";
	echo "bits:  $encBit<br><br>";
}
?>