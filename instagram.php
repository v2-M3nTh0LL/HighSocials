<?php

include 'header.php';





$sql1 = "SELECT name FROM premium_instagram order by rand() limit 1";

$sql2 = "SELECT name FROM normal_instagram order by rand() limit 1";

$sql3 = "SELECT name FROM normal_instagram order by rand() limit 1";



$result = mysqli_query($conn, $sql1);

$result1 = mysqli_query($conn, $sql2);

$result2 = mysqli_query($conn, $sql3);



$result3 = mysqli_query($conn, $sql1);

$result4 = mysqli_query($conn, $sql2);

$result5 = mysqli_query($conn, $sql3);









$name1h = $row4 = mysqli_fetch_assoc($result3);

$name1 = $row4["name"];

$name2h = $row5 = mysqli_fetch_assoc($result4);

$name2 = $row5["name"];

$name3h = $row6 = mysqli_fetch_assoc($result5);

$name3 = $row6["name"];



while($name2 == $name3)

{

    $sql3 = "SELECT name FROM normal_instagram order by rand() limit 1";

    $result5 = mysqli_query($conn, $sql3);

    $name3h = $row6 = mysqli_fetch_assoc($result5);

    $name3 = $row6["name"];

}



$result2 = mysqli_query($conn, $sql3);



if ( isset( $_POST['submit'] ) ) {
    date_default_timezone_set('UTC');
    $link = $_POST['link'];
    $timestamp = time();
    $current_time = date ( 'Y-m-d H:i:s' , $timestamp) ;



    $check="SELECT * FROM normal_instagram WHERE name = '$link'";

  $rs = mysqli_query($conn,$check);

  if (mysqli_num_rows($rs) > 0) {

    $row1h = $row7 = mysqli_fetch_assoc($rs);

    $id = $row7["id"];

      header("Location: already.php?db=normal_instagram&id=$id",true,301);

  }

    else{
	if (!empty($link)) {

		$sql = "INSERT INTO normal_instagram (name, reg_date,count) VALUES ('$link','$current_time','0');";

		$res = mysqli_query($conn, $sql);

    header("Location: succ.php?timp=$current_time", true, 301);

exit();

	} else{



	}


}
}

?>



<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Instagram boost</title>



<link rel="stylesheet" href="css/ig.css" type="text/css">

<link rel="stylesheet" href="css/animate.css" type="text/css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">



<script type="text/javascript" src="AR.js"></script>

<script type="text/javascript" src="hunger.js"></script>

<script type="text/javascript" src="trololo.js"></script>

<script type="text/javascript" src="noideaname.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>

  <body style='background-color:#ff1a75' >

   <!-- BUG <a href='index.html'><img src="images/back2.png" id="bac" onmouseover='AnimateRotate(360)' onmouseout="AnimateRotateo(360)"></a> -->

    <div id="snackbar">Scroll down and follow  these 3 users to join our program</div>





    <style>
    </style>


    <!-- Trigger/Open The Modal -->

    <!-- The Modal -->
    <div id="myModal" class="modal2">

      <!-- Modal content -->
      <div class="modal-content2">
        <div class="modal-header2">
          <span class="close">&times;</span>
          <i><h2>What does <img src='images/ig/3foi.png' width='20px'> mean?</h2></i>
        </div>
        <div class="modal-body2">
          <p>There are some benefits for these users, like: </p>
          <ul>
            <li><b>HIGHER:</b><ul><li>number of appearances</li><li> chance to be shown <i style="opacity:0.69;">(get about 10% of the service's users)</i></li></ul></li>
            <li>Direct support from the developers</li>
            <li>More in the future</li>
          </ul>
          <p>Do you want to join and help us? Let us know! <a href='cntct.php' style='text-decoration:none;'>Click here</a></p>
        </div>
        <div class="modal-footer2">
        <h3 style='opacity:0.5;'>@2021</h3>
        </div>
      </div>

    </div>







<div class='container-fluid h-25'>

<div class='row h-100'>

  <div class='col'></div>

  <div class='col' >

    <img src='images/ig/instagram.png' width='100px' class='mx-auto d-block align-middle' id='serv'>

  </div>

  <div class='col'></div>

</div>

</div>

<div class='container-fluid h-25'>

<div class='row h-100'>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3'></div>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 h-100 d-flex flex-wrap align-items-center' >



    <form id="form" class="input-group " action="instagram.php" method="post">

      <div class="input-group ">

        <div class="input-group-prepend">

      <span class="input-group-text">@</span>

        </div>

     <input type="text" name="link" class="form-control" placeholder="Enter your username" oninput="istrol()" id='inp' maxlength="17">

     <span class="input-group-btn">

          <button class="btn btn-success" name="submit"  type="submit"  id='magic' disabled  title='Follow the users below!' onclick="window.location.href = 'succ.html'" >Go!</button>

     </span>

   </form>

  </div>

  <div class="alert alert-warning" role="alert" id='errorr'>

  </div>

</div>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3   d-flex flex-wrap align-items-center' >

</div>

</div>

</div>







<div class='container-fluid h-50'>

<div class='row h-100' >

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-3 '></div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 h-100 d-flex flex-wrap align-items-center'>

    <div class="card d-flex flex-column comrade mx-auto" id="prem">

       <div class="card-body">

         <img src='images/ig/3foi.png' id="myBtn" style='cursor:pointer;' width="30" alt="Why is different?" height="40">
         <h4 class="card-title" id='user'><?php echo $name1 ?></h4>

       </div>

          <a href='aig.php?igname=<?php echo $name1 ?>&db=premium_instagram' style="text-decoration:none" target="_blank" id="prima">

        <div class='card-footer wer' onclick="" id='st'>

         Follow

       </div>

       </a>

     </div>

</div>



  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 h-100 d-flex flex-wrap align-items-center'>

    <div class="card d-flex flex-column comrade mx-auto ">

       <div class="card-body">

         <h4 class="card-title" id='user'><?php echo $name2?></h4>

       </div>

         <a href='aig.php?igname=<?php echo $name2 ?>&db=normal_instagram' style="text-decoration:none" target="_blank" id="adoua">

       <div class='card-footer wer' onclick="" id='nd'>

        Follow

      </div>

      </a>

     </div>

</div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 h-100 d-flex flex-wrap align-items-center' >

    <div class="card d-flex flex-column comrade mx-auto">

       <div class="card-body">

         <h4 class="card-title" id='user'><?php echo $name3?></h4>

       </div>

        <a href='aig.php?igname=<?php echo $name3 ?>&db=normal_instagram' style="text-decoration:none" target="_blank" id="atreia">

       <div class='card-footer wer' onclick="" id='rd'>

        Follow

      </div>

      </a>

     </div>

  </div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-3 h-50'></div>

</div>

</div>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


  </body>

</html>
