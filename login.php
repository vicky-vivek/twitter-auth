<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button onclick="checkLogin()">Login with twitter </button>
	<p id="demo"></p>
</body>
<script>
	function checkLogin(){
		console.log("kk");
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    	window.location = this.responseText;
    }
  };
  xhttp.open("GET", "twitterlogin.php", true);
  xhttp.send();
	}
</script>
</html>