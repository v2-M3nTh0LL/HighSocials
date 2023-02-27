<?php

include 'header.php';

$postlink = $_GET['postlink'];
$db = $_GET['db'];
if(isset($_POST['submit'])){
$sql = "UPDATE clicks SET post_clicks=post_clicks + 1 WHERE id=1";
        mysqli_query($conn,$sql);
$sql = "UPDATE $db SET count=count + 1 WHERE postLink='$postlink'";
        mysqli_query($conn,$sql);
header("Location: $postlink",true,301);
exit();
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="apst.css" type="text/css">
    <link rel="stylesheet" href="animate.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">

    <script type="text/javascript" src="AR.js"></script>
    <script type="text/javascript" src="AD.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Ad</title>
  </head>
  <body>
    <div class='container-fluid' id='ad'>
      <div class='row h-100'>
      <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4' ></div>
      <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'></div>
      <form method="post" action="apst.php?postlink=<?php echo $postlink ?>&db=<?php echo $db ?>" class='col-sm-4 col-md-4 col-lg-4 col-xl-4 d-flex flex-wrap align-items-center'><button type="submit" name="submit" class="btn btn-success btn-lg ml-auto d-block align-middle custom" style='vertical-align:middle;'>
    <b id='time'></b></button></form>
      </div>
      </div>
    <div class='container-fluid' id='ad2'>
           <div class='row h-100  d-flex flex-wrap align-items-center'>
             <div class= 'd-flex flex-column mx-auto'>
<h1 class="text-center display-2 txt" >There is a space for an ad.</h1><br>
<h2 class='text-center'>Do you have an ad? Do you need this place?</h2><br>
<h3 class='text-center'>Contact us:</h3>
<a href="mailto:fheravem@gmail.com?subject=Need%20promotional%20space"><img src='images/index/mail.png' id='img' class='d-flex flex-column mx-auto'></a>
          </div>
           </div>
      </div>

  </body>
</html>
