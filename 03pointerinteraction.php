
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

            function move() 
            {
                document.getElementById('x31').style.left = 300 - (X-500)/2 + 'px';
                document.getElementById('x32').style.left = 300 - (X-500)/3 + 'px';
                document.getElementById('x33').style.left = 300 - (X-500)/4 + 'px';

                document.getElementById('x31').style.top = 300 - (Y-300)/3 + 'px';
                document.getElementById('x32').style.top = 300 - (Y-300)/4 + 'px';
                document.getElementById('x33').style.top = 300 - (Y-300)/5 + 'px';
            }

            document.addEventListener("mousemove", function (e) {
                X = e.clientX;
                Y = e.clientY;
            }, false);
            
            setInterval(move, 100);
        });
    </script>
    <div class="container">
        <div style="height: 100vh">
            <br>
            <br>
            <hr>
            <!--    <div class="container draw animated fadeIn shadow m-5 p-4 w-50 h-75"> 
                    <div class="x3" id="x31"></div>
                    <div class="x3" id="x32"></div>
                    <div class="x3" id="x33"></div>
                </div>  -->
                <ul class="container draw shadow w-50 h-50 viewport" >
                    <li class="x3" id="x31"></li>
                    <li class="x3" id="x32"></li>
                    <li class="x3" id="x33"></li>
                </ul>
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
