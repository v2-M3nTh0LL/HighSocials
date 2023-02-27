var timer,minutes, seconds;

function startTimer(duration, display) {
     timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);


if(timer<1)
  display.textContent = "Skip ad";
else
        display.textContent = "Please wait " + seconds + " seconds";



  timer--;

    }, 1000);
}

window.onload = function () {
    var fiveMinutes =  5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};

function goTo(link){
if(timer<1)
location.href=link;


}
