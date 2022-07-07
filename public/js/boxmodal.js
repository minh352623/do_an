$(document).ready(function () {
  function formatMoney(num) {
    //Hàm tạo cho các đối tượng cho phép định dạng số nhạy cảm với ngôn ngữ.
    return Intl.NumberFormat("vi-VN").format(num);
  }
  let container = document.querySelector(".body_cart");
  let number_cart = document.querySelector(".js__formcart span");
  let number_cart_child = document.querySelector(".js__numberincart");
  let money = document.querySelector(".total_price span b");
  let totalCart = document.querySelectorAll(".total_cart");
  let tthang = document.querySelector(".tthang");
  let thanhtien = document.querySelector(".thanhtien");
  let tamtinh = document.querySelector(".tamtinh");
  let cart_title = document.querySelector(".cart_title .update_sl");
  let cart_summary = document.querySelector(".update_cart_summary");

  function loadCart(item, href) {
    let template = `
              <div class="product_item" data-id="${item.id}">
              <div class="product_item_img">
                  <img src="${href}/uploads/${item.image}" alt="">
              </div>
              <div class="product_item_text">
                  <span>${item.name}</span><br>
                 
      
                  <div class="number_price">
                      <div class="cart_list_left">
                          <div hreff="${href}" class="cart_item_left cart_item_number">-</div>
                          <span class="num_cart">${item.soluong}</span>
                          <div hreff="${href}" class="cart_item_right cart_item_number">+</div>
                      </div>
      
                      <div class="price_cart">
                          <span>${item.price}<b>đ</b></span>
                      </div>
                  </div>
      
              </div>
          </div>
              `;
    container.insertAdjacentHTML("beforeend", template);
  }

  var btn_cart = document.getElementById("js__box_user");
  let option_user = document.querySelector(".option_user");
  btn_cart.addEventListener("click", function (e) {
    if (
      e.target.matches("#js__box_user i") ||
      e.target.matches("#js__box_user img")
    ) {
      option_user.classList.toggle("active");
    }
    console.log("abc");
  });
  document.addEventListener("click", function (e) {
    if (
      !option_user.contains(e.target) &&
      !e.target.matches("#js__box_user img") &&
      !e.target.matches("#js__box_user i") &&
      !e.target.matches("#js__box_user")
    ) {
      console.log(e.target);
      option_user.classList.remove("active");
    }
  });

  //   var left = document.querySelectorAll(".cart_item_left");
  //   var right = document.querySelectorAll(".cart_item_right");
  let cartPage = document.querySelector(".cart_table");
  let bodyCart = document.querySelector(".body_cart");
  cartPage?.addEventListener("click", function (e) {
    if (e.target.matches(".cart_item_right")) {
      let btn = e.target;
      let btnnum = btn.parentElement.children[1];
      let valcar = btnnum.innerHTML;
      let href = $(".cart_item_right").attr("hreff");
      console.log(href);

      let newvalue = parseInt(valcar) + 1;
      btnnum.innerHTML = newvalue;
      let id = e.target.parentNode.parentNode.parentNode.parentNode.dataset.id2;
      console.log(e.target.parentNode.parentNode.parentNode.parentNode);

      $.post(
        "./Ajax/increAndDecre",
        { soluong: newvalue, id_pro: id },
        function (data) {
          console.log(JSON.parse(data));
          container.innerHTML = "";
          let number = 0;
          let summoney = 0;
          JSON.parse(data).forEach(function (item, index) {
            number += +item.soluong;
            summoney += item.soluong * item.price;
            loadCart(item, href);
            totalCart[index].textContent = formatMoney(item.total) + "đ";
            // console.log(number);
          });
          number_cart.textContent = number;
          number_cart_child.textContent = number;
          money.textContent = formatMoney(summoney) + "đ";
          tthang.textContent = formatMoney(summoney) + "đ";
          thanhtien.textContent = formatMoney(summoney) + "đ";
          tamtinh.textContent = formatMoney(summoney) + "đ";
        }
      );
    }
    if (e.target.matches(".cart_item_left")) {
      let btn = e.target;
      let href = $(".cart_item_left").attr("hreff");

      let btnnum = btn.parentElement.children[1];
      let valcar = btnnum.innerHTML;
      let newvalue = parseInt(valcar) - 1;
      if (newvalue <= 0) {
        newvalue = 1;
      }
      btnnum.innerHTML = newvalue;
      let id = e.target.parentNode.parentNode.parentNode.parentNode.dataset.id2;
      $.post(
        "./Ajax/increAndDecre",
        { soluong: newvalue, id_pro: id },
        function (data) {
          container.innerHTML = "";
          let number = 0;
          let summoney = 0;
          JSON.parse(data).forEach(function (item, index) {
            number += +item.soluong;
            summoney += item.soluong * item.price;
            loadCart(item, href);
            totalCart[index].textContent = formatMoney(item.total) + "đ";

            // console.log(number);
          });
          number_cart.textContent = number;
          number_cart_child.textContent = number;
          money.textContent = formatMoney(summoney) + "đ";
          tthang.textContent = formatMoney(summoney) + "đ";
          thanhtien.textContent = formatMoney(summoney) + "đ";
          tamtinh.textContent = formatMoney(summoney) + "đ";
        }
      );
    }
  });
  bodyCart.addEventListener("click", function (e) {
    if (e.target.matches(".cart_item_right")) {
      let btn = e.target;
      let href = e.target.getAttribute("hreff");

      console.log(href);
      let btnnum = btn.parentElement.children[1];
      let valcar = btnnum.innerHTML;
      let newvalue = parseInt(valcar) + 1;
      btnnum.innerHTML = newvalue;
      let id = e.target.parentNode.parentNode.parentNode.parentNode.dataset.id;
      console.log(id);
      console.log(e.target.parentNode.parentNode.parentNode.parentNode);
      //   console.log(newvalue);

      $.post(
        href + "/Ajax/increAndDecre",
        { soluong: newvalue, id_pro: id },
        function (data) {
          console.log(data);
          container.innerHTML = "";
          let number = 0;
          let summoney = 0;
          JSON.parse(data).forEach(function (item) {
            number += +item.soluong;
            summoney += item.soluong * item.price;
            loadCart(item, href);
            // console.log(number);
          });
          number_cart.textContent = number;
          number_cart_child.textContent = number;
          money.textContent = formatMoney(summoney) + "đ";
        }
      );
    }
    if (e.target.matches(".cart_item_left")) {
      let btn = e.target;
      // let href = $(".cart_item_left").attr("hreff");
      let href = e.target.getAttribute("hreff");

      console.log(href);
      let btnnum = btn.parentElement.children[1];
      let valcar = btnnum.innerHTML;
      let newvalue = parseInt(valcar) - 1;
      if (newvalue <= 0) {
        newvalue = 1;
      }
      btnnum.innerHTML = newvalue;
      let id = e.target.parentNode.parentNode.parentNode.parentNode.dataset.id;
      $.post(
        href + "/Ajax/increAndDecre",
        { soluong: newvalue, id_pro: id },
        function (data) {
          container.innerHTML = "";
          let number = 0;
          let summoney = 0;
          JSON.parse(data).forEach(function (item) {
            number += +item.soluong;
            summoney += item.soluong * item.price;
            loadCart(item, href);
            // console.log(number);
          });
          number_cart.textContent = number;
          number_cart_child.textContent = number;
          money.textContent = formatMoney(summoney) + "đ";
        }
      );
    }
  });

  ///form carrt

  var btncart = document.querySelector(".js__formcart");
  var formcart = document.querySelector(".form_cart");
  var btnclose = document.querySelector(".btn_close");

  btncart.addEventListener("click", function () {
    formcart.classList.add("open");
  });

  btnclose.addEventListener("click", function () {
    formcart.classList.remove("open");
  });
  let removeCartItem = document.querySelector(".body_cart_page");

  function loadCartPage(item, href) {
    let template = `
    
    <tr data-id2="${item.id}">
    <td>
        <a href=""><img src="${href}/uploads/${item.image}" alt=""></a>
        <span class="name_item_cart">${item.name}</span>
    </td>
    <td class="text-center">${item.price}</td>
    <td>
        <div class="number_price ">
            <div class="cart_list_left fs-3">
                <div class="cart_item_left cart_item_number">-</div>
                <span class="num_cart">${item.soluong}</span>
                <div class="cart_item_right cart_item_number">+</div>
            </div>


        </div>
    </td>
    <td class="total_cart">${item.total}</td>
    <td><span class="remove_item_cart" data-id="${item.id}"><i class="fa-solid fa-trash-can"></i></span></td>
</tr>   
    `;
    removeCartItem.insertAdjacentHTML("beforeend", template);
  }
  //remove item cart
  removeCartItem?.addEventListener("click", function (e) {
    if (e.target.matches(".remove_item_cart i")) {
      let id = e.target.parentNode.dataset.id;
      let href = removeCartItem
        .querySelector(".cart_item_right")
        .getAttribute("hreff");
      console.log(id);
      $.post("./Ajax/removeItem", { id_pro: id }, function (data) {
        console.log(JSON.parse(data));
        container.innerHTML = "";
        removeCartItem.innerHTML = "";
        let number = 0;
        let summoney = 0;
        cart_title.textContent = JSON.parse(data).length;
        cart_summary.textContent = JSON.parse(data).length;
        JSON.parse(data).forEach(function (item) {
          number += +item.soluong;
          summoney += item.soluong * item.price;
          loadCart(item, href);
          loadCartPage(item, href);
          // console.log(number);
        });
        number_cart.textContent = number;
        number_cart_child.textContent = number;
        money.textContent = formatMoney(summoney) + "đ";
        tthang.textContent = formatMoney(summoney) + "đ";
        thanhtien.textContent = formatMoney(summoney) + "đ";
        tamtinh.textContent = formatMoney(summoney) + "đ";
        // toastr.success("Đã xóa thành công", "Thông báo", {
        //   timeOut: 1500,
        //   closeButton: true,
        // });
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
          },
        });

        Toast.fire({
          icon: "success",
          title: "Xóa sản phẩm thành công!",
        });
      });
    }
  });
});
