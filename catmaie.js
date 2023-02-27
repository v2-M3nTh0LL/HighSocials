function numar(n) {
  return n > 9 ? "" + n : "0" + n;
}

function CatMaiE(cea) {
  Date.UTC();
  cea=new Date(Date.parse(cea));
  var countDownDate = cea.getTime()+24*60*60*1000;


  var x = setInterval(function() {
    var now = new Date().getTime();

    var distance = countDownDate - now;

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 *
      60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    document.getElementById("cnt").innerHTML = numar(hours) + ":" +
      numar(minutes) + ":" + numar(seconds);


    if (distance < 0) {
      clearInterval(x);
      document.getElementById("cnt").innerHTML = "00:00:00. <br><a href='index.html' style='text-decorations:none'>Do you want to reactivate?</a>";
    }
  }, 1000);
}
