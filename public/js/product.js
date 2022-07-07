$(document).ready(function () {
  function formatMoney(num) {
    //Hàm tạo cho các đối tượng cho phép định dạng số nhạy cảm với ngôn ngữ.
    return Intl.NumberFormat("vi-VN").format(num);
  }

  let container = document.querySelector(".body_cart");
  let number_cart = document.querySelector(".js__formcart span");
  let number_cart_child = document.querySelector(".js__numberincart");
  let money = document.querySelector(".total_price span b");

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
  //add cart page home and product
  $(".add-to-cart a").click(function (e) {
    e.preventDefault();
    if (e.target.matches(".add-to-cart a i")) {
      let item = e.target.parentNode.parentNode.parentNode;
      let id = +item.querySelector(".add-to-cart").dataset.id;
      let href = $(".add-to-cart a").attr("hreff");
      console.log(href);
      $.post(
        href + "/Ajax/addProduct",
        { id_item: JSON.stringify(id) },
        function (data) {
          // console.log(JSON.parse(data).length);
          container.innerHTML = "";
          let number = 0;
          let summoney = 0;
          console.log(data);
          JSON.parse(data).forEach(function (item) {
            number += +item.soluong;
            summoney += item.soluong * item.price;
            loadCart(item, href);
            // console.log(number);
          });
          number_cart.textContent = number;
          number_cart_child.textContent = number;
          money.textContent = formatMoney(summoney) + "đ";
          // toastr.options = {
          //   positionClass: "toast-top-center",
          // };
          // toastr.success("Thêm vào giỏ hàng thành công!", "Thông báo", {
          //   timeOut: 1000,
          //   closeButton: true,
          // });
          Swal.fire(
            "Thêm vào giỏ hàng thành công!",
            "Cảm ơn. Bấm ok để tiếp tục!",
            "success"
          );
        }
      );
    }
  });

  //add cart page detail
  $(".product_detail_add")?.click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    let item = e.target;
    let id = +item.dataset.id;
    console.log(+id);
    let href = $(this).attr("hreff");
    console.log(href);
    $.post(
      href + "/Ajax/addProduct",
      { id_item: JSON.stringify(id) },
      function (data) {
        container.innerHTML = "";
        let number = 0;
        let summoney = 0;
        console.log(data);
        JSON.parse(data).forEach(function (item) {
          number += +item.soluong;
          summoney += item.soluong * item.price;
          loadCart(item, href);
        });
        number_cart.textContent = number;
        number_cart_child.textContent = number;
        money.textContent = formatMoney(summoney) + "đ";
        // toastr.options = {
        //   positionClass: "toast-top-center",
        // };
        // toastr.success("Thêm vào giỏ hàng thành công!", "Thông báo", {
        //   timeOut: 1000,
        //   closeButton: true,
        // });
        Swal.fire(
          "Thêm vào giỏ hàng thành công!",
          "Cảm ơn. Bấm ok để tiếp tục!",
          "success"
        );
      }
    );
  });
});

$(".product_detail_buy").click(function (e) {
  toastr.options = {
    positionClass: "toast-top-right",
  };
  toastr.error(
    "Tính năng này chúng tôi đang bảo trì. Vui lòng thêm sản phẩm vào giỏ hàng để mua!",
    "Thông báo",
    {
      timeOut: 2000,
      closeButton: true,
    }
  );
});
