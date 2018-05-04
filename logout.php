<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button onclick="logout()">Logout </button>
	<p id="demo"></p>
</body>
<script>
	function logout(){
		console.log("logout");
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     window.location = 'http://127.0.0.1:8080/twitter/index.php';
    }
  };
  xhttp.open("GET", "twitterlogout.php", true);
  xhttp.send();
	}
</script>
</html>