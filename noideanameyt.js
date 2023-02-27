var a = false,
  b = false,
  c = false;

function chec(x) {
  if (!(x % 69)) {
    a = true;
    document.getElementById("st").style = "color:#000000;background-color:#d00 !important;";
  } else {
    if (x % 69 == 1) {
      b = true;
      document.getElementById("nd").style = "color:#000000;background-color:#d00 !important;";
    } else {
      c = true;
      document.getElementById("rd").style = "color:#000000;background-color:#d00 !important;";
    }
  }

if (a && b && c) {
  document.getElementById("magic").removeAttribute("disabled");
  document.getElementById("magic").removeAttribute("title");
}
}
