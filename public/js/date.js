function tanggal() {
var date = new Date();
var weekday = new Array(7);
    weekday[0] = "Minggu";
    weekday[1] = "Senin";
    weekday[2] = "Selasa";
    weekday[3] = "Rabu";
    weekday[4] = "Kamis";
    weekday[5] = "Jum'at";
    weekday[6] = "Sabtu";

var name = weekday[date.getDay()];
var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();
var hour = date.getHours();
var minute = date.getMinutes();
var second = date.getSeconds();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = name + " " + day + "-" + month + "-" + year + "/" + hour + ":" + minute + ":" + second;


document.getElementById('myDate').value = today;
}
