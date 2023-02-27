<?php


include 'header.php';


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}



$sql1 = "SELECT * FROM premium_page order by rand() limit 1";

$sql2 = "SELECT * FROM normal_page order by rand() limit 1";

$sql3 = "SELECT * FROM normal_page order by rand() limit 1";



$result = mysqli_query($conn, $sql1);

$result1 = mysqli_query($conn, $sql2);

$result2 = mysqli_query($conn, $sql3);



$result3 = mysqli_query($conn, $sql1);

$result4 = mysqli_query($conn, $sql2);

$result5 = mysqli_query($conn, $sql3);





$name1h = $row4 = mysqli_fetch_assoc($result3);

$name1 = $row4["name"];

$link1 = $row4["pageLink"];

$name2h = $row5 = mysqli_fetch_assoc($result4);

$name2 = $row5["name"];

$link2 = $row5["pageLink"];

$name3h = $row6 = mysqli_fetch_assoc($result5);

$name3 = $row6["name"];

$link3 = $row6["pageLink"];



while($name2 == $name3)

{

    $sql3 = "SELECT * FROM normal_page order by rand() limit 1";

    $result5 = mysqli_query($conn, $sql3);

    $name3h = $row6 = mysqli_fetch_assoc($result5);

    $name3 = $row6["name"];

    $link3 = $row6["pageLink"];

}



$result2 = mysqli_query($conn, $sql3);





if(isset($_POST['submit']))

{

  $link = $_POST['link'];

  $name = $_POST['name'];

  $current_time = gmdate('H:i:s');



  $check="SELECT * FROM normal_page WHERE pageLink = '$link'";

$rs = mysqli_query($conn,$check);

if (mysqli_num_rows($rs) > 0) {

  $row1h = $row7 = mysqli_fetch_assoc($rs);

  $id = $row7["id"];

    header("Location: already.php?db=normal_page&id=$id",true,301);

}

else {

  if (!empty($link) && !empty($name)) {

    $sql = "INSERT INTO normal_page (name, pageLink, reg_date, count) VALUES ('$name','$link','$current_time','0');";

    $res = mysqli_query($conn, $sql);

    header("Location: succ_pg.html", true, 301);

exit();

}

}

}

 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">

    <link rel="stylesheet" href="pg.css" type="text/css">



    <script type="text/javascript" src="AR.js"></script>

    <script type="text/javascript" src="hunger.js"></script>

    <script type="text/javascript" src="noideaname_pg.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



    <title>Do you want more likes?</title>

  </head>

  <body style='background-color:#ff7b29'>



    <a href='facebook.html'><img src="images/back2.png" id="bac" onmouseover='AnimateRotate(360)' onmouseout="AnimateRotateo(360)"></a>

    <div id="snackbar">Leave a like to these 3 pages to join our program</div>





<div class='container-fluid h-25'>

<div class='row h-100'>

  <div class='col'></div>

  <div class='col' >

    <br>

    <img src='images/fb/page.png' width='100px' class="mx-auto d-block align-middle" id='serv'>

  </div>

  <div class='col'></div>

</div>

</div>







<div class='container-fluid h-25'>

  <div class='row h-100'>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 '></div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 h-100 d-flex flex-wrap align-items-center' >

<form  class="input-group " method="post" action="page.php">



      <div class="input-group-prepend">

    <span class="input-group-text">@</span>

      </div>



      <input type="text" name="link" class="form-control" placeholder="Enter your page link" oninput="" id='inp'>

      <input type="text" name="name" class="form-control" placeholder="Enter your page name" oninput="" id='dname'>

       <span class="input-group-btn">

            <button class="btn btn-success" name="submit"  type="submit" disabled id='magic' title='Like the pages below!'>Go!</button>

       </span>

     </form>

    <div class="alert alert-warning" role="alert" id='errorr'>

    </div>

  </div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3  d-flex flex-wrap align-items-center' >

  </div>

  </div>

</div>





<div class='container-fluid h-50'>

<div class='row h-100' >

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-3 '></div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 h-100 d-flex flex-wrap align-items-center'>

    <div class="card d-flex flex-column comrade mx-auto ">

       <div class="card-body">

         <h4 class="card-title" id='user'><?php echo $name1 ?></h4>

       </div>

          <a href='apg.php?pagelink=<?php echo $link1?>&db=premium_post' style="text-decoration:none" target="_blank">

        <div class='card-footer wer' onclick="chec(69)" id='st'>

        Like

       </div>

       </a>

     </div>

</div>



  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 h-100 d-flex flex-wrap align-items-center'>

    <div class="card d-flex flex-column comrade mx-auto ">

       <div class="card-body">

         <h4 class="card-title" id='user'><?php echo $name2 ?></h4>

       </div>

         <a href='apg.php?pagelink=<?php echo $link2?>&db=normal_post' style="text-decoration:none" target="_blank">

       <div class='card-footer wer' onclick="chec(139)" id='nd'>

        Like

      </div>

      </a>

     </div>

</div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 h-100 d-flex flex-wrap align-items-center' >

    <div class="card d-flex flex-column comrade mx-auto">

       <div class="card-body">

         <h4 class="card-title" id='user'><?php echo $name3 ?></h4>

       </div>

        <a href='apg.php?pagelink=<?php echo $link3?>&db=normal_post' style="text-decoration:none" target="_blank">

       <div class='card-footer wer' onclick="chec(4763)" id='rd'>

      Like

      </div>

      </a>

     </div>

  </div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-3 h-50'></div>



</div>

</div>



</body>

</html>

