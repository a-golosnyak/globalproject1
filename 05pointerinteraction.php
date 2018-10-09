
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
      <!-- Start your project here-->
<!--=============================================================================================-->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var X = Y = 0;

            viewport51.onmouseover = function(){
                viewport51Time = setInterval(move1, 20);
            }

            viewport52.onmouseover = function(){
                viewport52Time = setInterval(move2, 20);
            }

            viewport51.onmouseout = function(){
                clearInterval(viewport51Time);
            }

            viewport52.onmouseout = function(){
                clearInterval(viewport52Time);
            }

            function move1() 
            {
                document.getElementById('rect5').style.transform ='rotateY('+ (X/2-30) +'deg)';
                document.getElementById('x-val').value = X;
                document.getElementById('y-val').value = Y;
                Var=Var+1;
            }
            function move2() 
            {
                document.getElementById('rect51').style.transform ='rotateY('+ (X/2-30) +'deg)';
                document.getElementById('x-val').value = X;
                document.getElementById('y-val').value = Y;
            }

            document.addEventListener("mousemove", function (e) {
                X = e.clientX;
                Y = e.clientY;
            }, false);
            

            
        });
    </script>
    <div class="container-fluid">
        <div style="height: 100vh">
            <div class="row mt-5">
                <div class="col-sm-3 viewport5 w-25" id="viewport51">
                    <img src="img/user/14_f4discovery.jpg" id='rect5' alt="">
                </div>
                <div class="viewport5 w-25 offset-sm-1" id="viewport52">
                    <img src="img/user/10_hand.jpg" class="mt-5" id='rect51' alt="">
                </div>
            </div>
            <label>X <input type="text" size="4" id="x-val" value="123" /></label>
            <label>Y <input type="text" size="4" id="y-val" value="123" /></label>
        </div>
    </div>
    <!-- /Start your project here-->
<!--=============================================================================================-->
    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
