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
    <script type="text/javascript" src="catmaie.js"></script>
  </head>
  <body onload='CatMaiE("2020-05-30 22:00:00")'>
    <a href='index.html'><img src="images/back2.png" id="bac" onmouseover='AnimateRotate(360)' onmouseout="AnimateRotateo(360)"></a>
  <div class='container-fluid h-100 d-flex flex-wrap align-items-center'>
    <div class='row h-25 wrap w-75 d-flex flex-column comrade mx-auto'>
<table style='height:100%;'>
  <tr class='gead' >
<h1 class="text-center mt-auto mb-auto">Hi,
<b> user </b> <!--introdus username-ul din baza de date!-->
</h1>
</tr>

<tr>
  <td style="background-color:Lavender;width:50%;height:100%;">
<p class='text-center'>For the next </p>
<h1 class='text-center' id='cnt'>25:59:03</h1>
<p class='text-center'>You are still promoted with our program.</p>
</td>

<td>
  <p class='text-center'>There were </p>
<h1 class='text-center'><b id='clck'>
<!--de sters script-ul si pus numarul de click-uri !-->
<script>
document.getElementById("clck").innerHTML = Math.floor(Math.random() * 1000);
</script>
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
