$(document).ready(function () {
  function formatMoney(num) {
    //Hàm tạo cho các đối tượng cho phép định dạng số nhạy cảm với ngôn ngữ.
    return Intl.NumberFormat("vi-VN").format(num);
  }
  let container = document.querySelector(".body_cart");
  let number_cart = document.querySelector(".js__formcart span");
  let number_cart_child = document.querySelector(".js__numberincart");
  let money = document.querySelector(".total_price span b");

  function loadCart(item) {
    let template = `
        <div class="product_item" data-id="${item.id}">
        <div class="product_item_img">
            <img src="./uploads/${item.image}" alt="">
        </div>
        <div class="product_item_text">
            <span>${item.name}</span><br>
           

            <div class="number_price">
                <div class="cart_list_left">
                    <div class="cart_item_left cart_item_number">-</div>
                    <span class="num_cart">${item.soluong}</span>
                    <div class="cart_item_right cart_item_number">+</div>
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
      console.log(id);
      $.post(
        "./Ajax/addProduct",
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
            loadCart(item);
            // console.log(number);
          });
          number_cart.textContent = number;
          number_cart_child.textContent = number;
          money.textContent = formatMoney(summoney) + "đ";
          alert("Thêm vào giỏ hàng thành công!");
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
    console.log(id);
    $.post(
      "./Ajax/addProduct",
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
          loadCart(item);
          // console.log(number);
        });
        number_cart.textContent = number;
        number_cart_child.textContent = number;
        money.textContent = formatMoney(summoney) + "đ";
        alert("Thêm vào giỏ hàng thành công!");
      }
    );
  });
});
