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
      (minute >= 10 ? minute : "0" + minute);
    if (id) document.getElementById(id).innerHTML = outStr;
    if (!c) return outStr;
    setTimeout("common.clock(true,'clock')", 1e3);
  },
  submitForm: function (event) {
    event.preventDefault();
    // call api send mail /contact/send-info
    let name = document.getElementById("ho-va-ten").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("so-dien-thoai").value;
    let address = document.getElementById("dia-chi").value;
    let message = document.getElementById("noi-dung").value;
    let data = {
      "ho-va-ten": name,
      email: email,
      "so-dien-thoai": phone,
      "dia-chi": address,
      "noi-dung": message,
    };

    // check validate
    if (!name || !phone) {
      alert("Vui lòng nhập đầy đủ thông tin");
      return;
    }

    // phone number validate. 10-11 number, start with 0
    let phoneRegex = /(0[0-9]{9,10})/;
    if (!phoneRegex.test(phone)) {
      alert("Số điện thoại không hợp lệ");
      return;
    }

    // show loading overlay, change class from d-none to d-block
    document.getElementById("loading").classList.remove("d-none");

    fetch("/contact/send-info", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((response) => response.json())
      .then((res) => {
        document.getElementById("loading").classList.add("d-none");
        var myModal = bootstrap.Modal.getOrCreateInstance(
          document.getElementById("exampleModalCenter")
        );
        myModal.hide();
        Swal.fire({
          title: "Đã gửi!",
          text: "Cảm ơn bạn đã gửi thông tin, chúng tôi sẽ liên hệ lại sớm nhất có thể",
          icon: "success",
        });
        document.getElementById("form").reset();
      })
      .catch((err) => {
        console.log(err);
        alert("Gửi thông tin thất bại");
      });
    return;
  },
};

if (document.getElementById("clock") !== null) common.clock(true, "clock");
