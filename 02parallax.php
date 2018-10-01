<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> </title>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		html, body {
		    height: 100%;
		    margin: 0;
		}	
	</style>

	<script>
		$(document).ready(function($) {
			var elem = $(".target3").attr("class");
			$(".target3").css("background-color", "lightgrey");
		});
	</script>
</head>
	<body>
			<br>
			<br>
			<script>
				$("#Do").hover(
					function(event) {
						$(".target1").css('color', 'blue');
					},
					function(event){
						$(".target1").css('color', 'black');
						$(".target2").css('background-color', 'white');
				});

				$("#Do").click(function(event) {
					$(".target2").css('background-color', 'blue');
				});

				$('div:not(.cls)');
				$('div.firstclass').filter('.secondclass');
				$("div[title = 'test']");
				$('input:checked');
				$('input:radio');
				$("div[name='red']:visible:has(span)");
			</script>
			<hr>

				<div class="draw" style="
							box-shadow: 0 0 5px rgba(0,0,0,0.5);
							margin: 20px 40px;
							padding: 30px;
							width: 60%;
							height: 70%;
							/*margin-right: auto;*/
							background-color: rgba(250, 250, 250, 1);
							">	
					<h3 style="margin: 0 auto 0;"> Features, samples, templates.</h3>
					<ol>
						<li><a href="01emptygrid.php"> Empty grid</li>
					</ol>		
				</div>
			</div>
		</div>
	</body>
</html>