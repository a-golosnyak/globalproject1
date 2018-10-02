
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

      <div style="height: 100vh">
            <body>
            <br>
            <br>
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
                <div id="x"></div>
              </div>
          </body>
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
