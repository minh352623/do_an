window.addEventListener("load", function (e) {
  let admin_link = document.querySelectorAll(".nav-link-child");
  admin_link.forEach((item) => {
    item.addEventListener("click", function (e) {
      admin_link.forEach((item) => {
        item.classList.remove("active");
      });
      item.classList.add("active");
    });
  });
});
