window.addEventListener("load", function () {
  const register = document.querySelector("form");
  const name = document.querySelector(".register_name");
  const email = document.querySelector(".register_email");
  const pass = document.querySelector(".register_pass");

  // register.addEventListener("submit", function (e) {
  //   e.preventDefault();
  //   if (name.value != "" && email.value != "" && pass.value != "") {
  //     this.submit();
  //   } else {
  //     alert("Bạn phải nhập đầy đủ thông tin");
  //   }
  // });
});

$(document).ready(function () {
  // alert("1");
  $("#user_name").blur(function () {
    let user = $(this).val();
    if (user.length > 0) {
      $.post("./Ajax/checkUserName", { un: user }, function (data) {
        let thongbao = "";
        let color = "error";

        console.log(data);
        if (data == "true") {
          thongbao = "Tên đã có trong hệ thống";
          color = "danger";
        } else {
          thongbao = "Hợp lệ";
          color = "success";
        }
        $("#message_username").text(thongbao);
        $("#message_username").removeAttr("class");

        $("#message_username").attr("class", color);
      });
    }
  });
  $("#user_email").blur(function () {
    let email_user = $(this).val();
    if (email_user.length > 0) {
      $.post("./Ajax/checkUserEmail", { email: email_user }, function (data) {
        let thongbao = "";
        let color = "error";
        if (data == "true") {
          thongbao = "Email đã có trong hệ thống";
          color = "danger";
        } else {
          thongbao = "Hợp lệ";
          color = "success";
        }
        $("#message_email").text(thongbao);
        $("#message_email").removeAttr("class");

        $("#message_email").attr("class", color);
        // console.log(data);
      });
    }
  });

  // register
  $(".register").click(function () {
    const from_register = $("#form_register");
    let name = $(".register_name").val();
    let email = $(".register_email").val();
    let pass = $(".register_pass").val();
    let tel = $(".register_tel").val();
    let address = $(".register_address").val();

    if (
      $(".register_name").val() != "" &&
      $(".register_email").val() != "" &&
      $(".register_pass").val() != "" &&
      $(".register_tel").val() != "" &&
      $(".register_address").val() != ""
    ) {
      $.post(
        "./Ajax/checkRegister",
        {
          fullname: name,
          user_email: email,
          pass_user: pass,
          sdt: tel,
          diachi: address,
        },
        function (data) {
          let message = $("#message_register");
          let color = "";
          if (data == "true") {
            // console.log(data);
            message.text("Đăng kí thành công!");
            color = "success";
            from_register.trigger("reset");
          } else {
            message.text("Đăng kí thất bại!");
            color = "danger";
          }
          message.removeAttr("class");

          message.attr("class", color);
          $("#message_username").text("");
          $("#message_email").text("");
        }
      );
    }
  });
});
