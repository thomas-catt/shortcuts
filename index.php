<!DOCTYPE html>
<html>
<head>
	<title>bruh</title>
	<style type="text/css">
		.main{
			border: solid 0.5px #aaa;
			width: 30%;
			margin: auto;
			padding: 10px;
			box-shadow: 0px 0px 5px #ccc;
			margin-top: 15%;
			border-radius: 5px;
		}	

	</style>
</head>
<body style="font-family: Arial;">


<div class="main">
	<h1>bruh</h1>
	<p id="desc">you jus got bruhed lmao </p>
	<button onclick="getBruhed()">get bruhed</button>
	<span style="color: #aaa; font-size: 10px;">dis btn doz notin</span><br>
	<input id="acceptntCheck" type="checkbox" name="" onclick="acceptntTerms()"><span id="acceptntCheckDesc">acceptn't the terms and conditions</span><br>
	<input id="funnyCheck" type="checkbox" name="" onclick="funny()"><span id="funnyCheckDesc">check me to get the funny</span>
</div>


<script>


	function getBruhed() {
		document.getElementById("desc").innerHTML = "You got bruhed again lmfao i wonder why did you even clicc that"
	}

	function acceptntTerms() {
		acceptntCheck = document.getElementById("acceptntCheck")
		if(acceptntCheck.checked) {
			document.getElementById("acceptntCheckDesc").innerHTML = "unacceptn't the terms and conditions"
		}
		else{
			document.getElementById("acceptntCheckDesc").innerHTML = "acceptn't the terms and conditions"
		}
	}

	function funny() {
		funnyCheck = document.getElementById("funnyCheck")
		if(funnyCheck.checked) {
			open("https://reddit.com/r/memes")
			document.getElementById("funnyCheckDesc").innerHTML = "uncheck me to do nothing"
		}
		else{
			document.getElementById("funnyCheckDesc").innerHTML = "check me to get the funny"
		}

	}
</script>
</body>
</html>