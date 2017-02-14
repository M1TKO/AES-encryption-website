<?php require_once 'AES.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AES encryption</title>
	<link rel="icon" href="media/icon.png">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style>
		.errorMsg1, .errorMsg2{display: none;}
	</style>
</head>
<body>
<?php include 'enc_dec.php'; ?>
<p id="header">AES encryption online</p>
<div class="main-container">
	<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">

		<p>Enter encryption key:</p>
		<span class="errorMsg1"><?php echo $errorKey; ?></span>
		<input type="text" name="key" id="key" maxlength="100" autocomplete="off">
		
		<p>Enter your data for encryption / decryption:</p>
		<span class="errorMsg2"><?php echo $errorData; ?></span>
		<textarea name="data" id="data"  rows="15"></textarea><br>

		<div class="radio-btns">
			<p>Choose the level of encryption:</p>
	 		<input type="radio" name="encBit" value="128" id="rb1" checked>
	 		<label for="rb1">128 Bit</label>
	 		<input type="radio" name="encBit" value="192" id="rb2">
	 		<label for="rb2">192 Bit</label>
	 		<input type="radio" name="encBit" value="256" id="rb3">
	 		<label for="rb3">256 Bit</label>
	 	</div>
	 	<br>

	 	<input name="operation" type="submit" value="encrypt" id="submitBtn">
	 	<input name="operation" type="submit" value="decrypt" id="submitBtn">
	</form>


	<div class="show-result">
			<div class="showKey">
				<p>KEY </p>
				<button id="copyKey" onclick="copyToClipboard('#keyShow')">
					<img src="media/copy.svg" alt="copy">
				</button>
				<textarea readonly="readonly" id="keyShow" rols="1" cols="1"><?php echo $showKey;?></textarea>
			</div>
		<textarea readonly="readonly" cols="80" rows="15" id="result"><?php echo $result; ?></textarea>
		<button id="copyData" onclick="copyToClipboard('#result')">Copy to clipboard <img src="media/copy.svg" alt="copy">
		</button>
	</div>
</div>
<div class="footer">
	<p>Programmed and styled by Dimitar Kalenderov.</p>
	<a href="https://github.com/M1TKO/AES-encryption-website" target="_blank">
		<img src="media/github.png" alt="github">
	</a>
	<a href="http://aesencryption.net/" target="_blank">
		<img src="media/aes.JPG" alt="aes">
	</a>
	<p>Big thanks to aesencription.net for AES algorithm. <3</p>
</div>

<script type="text/javascript" src="script.js"></script>
<!--
</body>
</html>