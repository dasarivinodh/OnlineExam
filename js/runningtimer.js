var countdownTimer;
function runtimer()
{
  
 
   countdownTimer = setInterval('secondPassed()', 1000);
}
function secondPassed() 
  {
    var minutes = Math.round((tt - 30)/60);
    var remainingSeconds = tt % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('timer').innerHTML = minutes + ":" + remainingSeconds;
    if (tt == 0) {
        clearInterval(countdownTimer);
        window.location = "http://localhost/start/php/student_login.php";
    } else {
        tt--;
    }
  }