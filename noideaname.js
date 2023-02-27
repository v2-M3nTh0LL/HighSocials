var a = false,
  b = false,
  c = false;

function chec(x) {
  if (!(x % 69)) {
    a = true;
    document.getElementById("st").style = "color:#000000;background-color:#0467b3 !important;";
  } else {
    if (x % 69 == 1) {
      b = true;
      document.getElementById("nd").style = "color:#000000;background-color:#0467b3 !important;";
    } else {
      c = true;
      document.getElementById("rd").style = "color:#000000;background-color:#0467b3 !important;";
    }
  }

if (a && b && c) {
  document.getElementById("magic").removeAttribute("disabled");
  document.getElementById("magic").removeAttribute("title");
  var val = document.getElementById("inp").value;
  val = val.toString();
  if (val.length == 17)
    trolis("lungime");
}
}
