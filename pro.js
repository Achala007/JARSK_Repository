
    var m = 10;
    var s = 1;
function startTime() {
    s -= 1;
    // add a zero in front of numbers<10
    s = checkTime1(s);
    m -= checkTime2(s);
    document.getElementById("txt").innerHTML = m + " minutes and " + s + " seconds remaining";
    var t = setTimeout(function(){ startTime() }, 1000);
}

function checkTime1(i) {
    if (i < 0 ) {
        i = 59;
    }
    return i;
}
function checkTime2(i) {
    var nm = 0;
    if (i == 59) {
        nm = 1;
    }
    return nm;
}