<?php $ceas = $_GET['timp']; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Thank you for joining our program!</title>

  <link rel="stylesheet" href="succ.css" type="text/css">
  <link rel="stylesheet" href="foot.css" type="text/css">
  <link rel="stylesheet" href="animate.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">


  <script type="text/javascript" src="AR.js"></script>
  <script type="text/javascript" src="catmaie.js"></script>
  <script type="text/javascript" src="noideaname.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body style=" background-color:#6cf58c;" onload='CatMaiE("<?php echo $ceas  ?>")'>
  <!-- data introdusa din php, ca parametru !-->
  <a href='index.html'><img src="images/back2.png" id="bac" onmouseover='AnimateRotate(360)' onmouseout="AnimateRotateo(360)"></a>

  <div class='container-fluid h-100'>
    <div class='row h-100'>
      <div class='col d-flex flex-wrap align-items-center'>
        <div class='mx-auto d-block align-middle'>
          <b>
            <p class="display-3 text-center" style='color:#ffffff;font-family: ' Roboto', sans-serif;'>Succes!</p>
          </b>
          <div class="swal2-icon swal2-success swal2-animate-success-icon hov" style="display: flex;">
            <div class="swal2-success-circular-line-left"></div>
            <span class="swal2-success-line-tip"></span>
            <span class="swal2-success-line-long"></span>
            <div class="swal2-success-ring"></div>
            <div class="swal2-success-fix"></div>
            <div class="swal2-success-circular-line-right"></div>
          </div>
          <p class='text-center'>Please come back in: <strong id='cnt'>23:59:59</strong></p>
          <p class='text-center' id='flw'>Follow our official account to keep up to date:</p>
          <a href='https://instagram.com/high.sociall' target='_blank' class='mx-auto d-block align-middle'><img src='images/index/ig.png' class='rounded-circle cntct mx-auto d-block align-middle'></a>
        </div>
      </div>
    </div>

  </div>


  <div class='container-fluid ttt hnj'>


      <div class="col h-100 text-center py-3 culsp">
        <p style='color:#fff;'><b id='kip'>Keep in touch with us!</b></p>
        <a href="mailto:contact@highsocials.com?subject=Contact"> <img src='images/index/mail.png' class='rounded-circle cntct'></a>
        <a href="https://www.facebook.com/HighSocials-101343301612595/"><img src='images/index/fb.png' class='rounded-circle cntct'></a>
        <img src='images/index/yt.png' class='rounded-circle cntct'>
        <br><b style='color:#000' id='an'>© 2020</b>
      </div>
    </div>
  </div>


</body>

</html>
