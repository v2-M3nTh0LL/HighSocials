<?php
include 'header.php';


  if(isset($_POST['submit']) )
{
    $sql = "INSERT INTO barosani(igname)
    VALUES ('".$_POST["link"]."')";

    $result = mysqli_query($conn,$sql);
    header("Location: contacted.html");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="cntct.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="AR.js"></script>
  </head>
  <body>
    <a href='index.html'><img src="images/back2.png" id="bac" onmouseover='AnimateRotate(360)' onmouseout="AnimateRotateo(360)"></a>
    <div class='container-fluid h-100'>
      <div class='row h-100 bec d-flex flex-wrap align-items-center  '>
          <form id="form" class="input-group d-flex flex-column mx-auto w-75" action="cntct.php" method="post">
            <div class="input-group ">
              <div class="input-group-prepend">
            <span class="input-group-text">@</span>
              </div>
           <input type="text" name="link" class="form-control" placeholder="Enter your username" oninput="istrol()" id='inp' maxlength="17">
           <span class="input-group-btn">
                <button class="btn btn-success" name="submit"  type="submit"  id='magic'>Join us!</button>
           </span>
         </form>
      </div>
    </div>

  </body>
</html>
