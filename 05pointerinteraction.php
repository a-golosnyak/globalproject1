
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
                Var = 1;
            //    document.getElementById('rect5').style.transform ='rotateX('+ (Y/20-20) +'deg)';
                document.getElementById('rect5').style.transform ='rotateY('+ (X/10-30) +'deg)';
                document.getElementById('x-val').value = X;
                document.getElementById('y-val').value = Y;
                Var=Var+1;
            }

            document.addEventListener("mousemove", function (e) {
                X = e.clientX;
                Y = e.clientY;
            }, false);
            
            setInterval(move, 20);
        });
    </script>
    <div class="container">
        <div style="height: 100vh">
            <br>
            <br>
            <hr>
            <br>
            <div class="viewport5">
                <div id='rect5'>Top</div>
            </div>
            <br>
            <br>
            <hr>
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
