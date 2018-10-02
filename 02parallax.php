<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> </title>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		html, body {
		    height: 100%;
		    margin: 0;
		}	
	</style>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
	    var X = Y = 0;

	    function move() {
	        document.getElementById('x').style.left = X + 'px';
	        document.getElementById('x').style.top = Y + 'px';
	    }
	    document.addEventListener("mousemove", function (e) {
	        X = e.clientX;
	        Y = e.clientY;
	    }, false);

	    setInterval(move, 100);
	});
	</script>
</head>

</html>