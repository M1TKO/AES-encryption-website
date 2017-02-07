<?php require_once 'AES.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AES encryption</title>
</head>
<body>
<?php include 'enc_dec.php'; ?>

<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">

	<p>Enter encryption key:</p>
	<input type="text" name="key" id="key">
	<span><?php echo $errorKey; ?></span>
	<p>Enter your data for encryption</p>
	<textarea name="data" id="data" cols="80" rows="15" id="data"></textarea><br>
	<span><?php echo $errorData; ?></span>
	<p>Choose the level of encryption</p>
 	<label>128 Bit<input type="radio" name="encBit" value="128" checked></label><br>
 	<label>192 Bit<input type="radio" name="encBit" value="192"></label><br>
 	<label>256 Bit<input type="radio" name="encBit" value="256"></label><br>
 	<br>
 	<input name="operation" type="submit" value="encrypt" id="submitBtn">
 	<input name="operation" type="submit" value="decrypt" id="submitBtn">
</form>

<div class="show-result">
	<span id=result><?php echo $result; ?></span>
</div>


</body>
</html>