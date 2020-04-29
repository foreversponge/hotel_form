function displayClock() {
    var date = new Date();
    var hour = d.getHours();
    var minute = d.getMinutes();
    var second = d.getSeconds();
    var year = d.getFullYear();
    var month = d.getUTCMonth();
    var date = d.getDate();
    minute = setZero(minute);
    second = setZero(second);

    document.getElementById("currentTime").innerHTML = "Date: " + month + "/" + date + "/" + year + " " + hour + ":" + minute + ":" + second;

    setTimeout(function () {
        displayClock();
    }, 1000);
}

function setZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

displayClock();