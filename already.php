<?php
include 'header.php';

$db = $_GET['db'];
$id = $_GET['id'];




$sql = "SELECT * FROM $db WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

$data = $row = mysqli_fetch_assoc($result);
$count = $row["count"];
$reg_time = $row["reg_date"];
$name = $row["name"];

function differenceInHours($startdate,$enddate){
	$starttimestamp = strtotime($startdate);
	$endtimestamp = strtotime($enddate);
	$difference = abs($endtimestamp - $starttimestamp)/3600;
	return $difference;
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="already.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="AR.js"></script>
    <script type="text/javascript" src="catmaie.jss"></script>
  </head>
  <body onload='CatMaiE("2020-05-30 22:00:00")'>
    <a href='default.html'><img src="images/back2.png" id="bac" onmouseover='AnimateRotate(360)' onmouseout="AnimateRotateo(360)"></a>
  <div class='container-fluid h-100 d-flex flex-wrap align-items-center'>
    <div class='row h-25 wrap w-75 d-flex flex-column comrade mx-auto'>
<table style='height:100%;'>
  <tr class='gead' >
<h1 class="text-center mt-auto mb-auto">Hi,
<b> <?php echo $name ?> </b> <!--introdus username-ul din baza de date!-->
</h1>
</tr>

<tr>
  <td style="background-color:Lavender;width:50%;height:100%;">
<p class='text-center'>For the next </p>
<h1 class='text-center' id='cnt'></h1>
 <script>

 function numar(n) {
   return n > 9 ? "" + n : "0" + n;
 }
var countDownDate = new Date("Jan 5, 2026 <?php echo $reg_time ?>").getTime();


var x = setInterval(function() {


  var now = new Date().getTime();

  var hours = Math.floor((now % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((now % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((now % (1000 * 60)) / 1000);

  console.log(hours + ":" + minutes + ":" + seconds);

  var distance = countDownDate - now;



  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.getElementById("cnt").innerHTML = numar(hours) + ":" +
    numar(minutes) + ":" + numar(seconds);



  if (hours == 0 && minutes == 0 && seconds == 0) {
    clearInterval(x);
    document.getElementById("cnt").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<p class='text-center'>You are still promoted with our program.</p>
</td>

<td>
  <p class='text-center'>There were </p>
<h1 class='text-center'><b id='clck'>
<!--de sters script-ul si pus numarul de click-uri !-->
<?php echo $count ?>
</b></h1>
<p class='text-center'>clicks.</p>
</td>
</tr>
</table>
</div>


  </div>
</div>



  </body>
</html>
