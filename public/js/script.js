var common = {
  cvtago(t) {
    if (!t) return false;
    else t = +t + 25200;
    let cs = Math.floor(Date.now() / 1000);
    let ct = cs - t;
    return ct < 60
      ? ct + " giây"
      : (ct < 60 * 60
          ? Math.floor(ct / 60) + " phút"
          : ct < 60 * 60 * 24
          ? Math.floor(ct / (60 * 60)) + " giờ"
          : Math.floor(ct / (60 * 60 * 24)) + " ngày") + " trước";
  },
  clock: function (c = true, id = "", t) {
    var d = !t ? new Date() : new Date((+t + 25200) * 1000);
    var weekday = new Array(7);
    weekday[0] = "Ch\u1ee7 nh\u1eadt";
    weekday[1] = "Th\u1ee9 hai";
    weekday[2] = "Th\u1ee9 ba";
    weekday[3] = "Th\u1ee9 t\u01b0";
    weekday[4] = "Th\u1ee9 n\u0103m";
    weekday[5] = "Th\u1ee9 s\u00e1u";
    weekday[6] = "Th\u1ee9 b\u1ea3y";
    var n = weekday[d.getDay()];
    var date = d.getDate();
    var month = d.getMonth() + 1;
    var hour = d.getHours();
    var minute = d.getMinutes();
    var outStr =
      n +
      ", " +
      date +
      "/" +
      month +
      "/" +
      d.getFullYear() +
      " | " +
      (hour >= 10 ? hour : "0" + hour) +
      ":" +
      (minute >= 10 ? minute : "0" + minute) +
      " GMT+7";
    if (id) document.getElementById(id).innerHTML = outStr;
    if (!c) return outStr;
    setTimeout("common.clock(true,'clock')", 1e3);
  },
};

if (document.getElementById("clock") !== null) common.clock(true, "clock");
