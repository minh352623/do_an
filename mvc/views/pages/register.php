<div class="main">

    <div class="container">
        <form id="form_register" action="" method="post">
            <h2 style="text-align: center;margin:0px 0 16px;">Đăng kí</h2>
            <p id="message_register"></p>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input required type="email" id="user_email" name="email" class="form-control register_email" id="exampleFormControlInput1" placeholder="name@example.com">
                        <p id="message_email"></p>

                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">

                        <label for="exampleFormControlInput1" class="form-label">Họ tên</label>
                        <input required type="text" id="user_name" name="fullname" class="form-control register_name" id="exampleFormControlInput1" placeholder="Nguyễn Văn A">
                        <p id="message_username"></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
                        <input required type="pasword" name="password" class="form-control register_pass" id="exampleFormControlInput1" placeholder="1111111">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
                        <input required type="pasword" name="password" class="form-control register_tel" id="exampleFormControlInput1" placeholder="0123456789">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
                        <textarea required type="pasword" name="password" class="form-control register_address" id="exampleFormControlInput1" placeholder="Địa chỉ..."></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="dangki" value="dangki">
            <div class="group_button">

                <a href="Login">Đăng Nhập</a>
                <button type="button" name="dangki" class="btn btn-primary register">Đăng kí</button>
            </div>


        </form>

    </div>
</div>