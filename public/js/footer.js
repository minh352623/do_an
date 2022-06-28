window.addEventListener("load", function (e) {
  let register_footer = document.querySelector(".register_footer");
  register_footer.addEventListener("click", function (e) {
    toastr.options = {
      positionClass: "toast-top-right",
    };
    toastr.warning(
      "Hiên tại chúng tôi đang phát triển chức năng này. Vui lòng thử lại sau",
      "Thông báo",
      {
        timeOut: 8000,
        closeButton: true,
      }
    );
  });
});
