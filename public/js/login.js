// $(".login").click(function () {
//   let name = $(".login_name").val();
//   let pass = $(".login_pass").val();

//   if ($(".login_name").val() != "" && $(".login_pass").val() != "") {
//     $.post(
//       "./Ajax/checkLogin",
//       {
//         fullname: name,
//         pass_user: pass,
//       },
//       function (data) {
//         console.log(data);
//         if (data == "false") {
//           alert("Tài khoản không tồn tại");
//         }
//       }
//     );
//   } else {
//     alert("Không được rỗng");
//   }
// });
