<div class="main">

    <div class="container">
        <form id="form_login" action="Login/checkLogin" method="post">
            <h2 style="text-align: center;margin:0px 0 16px;">Đăng Nhập</h2>
            <p><?php if (isset($data['thongbao'])) {
                    echo '<h4 style="color:red;">' . $data['thongbao'] . '</h4>';
                } ?></p>
            <div class="row">

                <div class="col-12">
                    <div class="mb-3">

                        <label for="exampleFormControlInput1" class="form-label">User Name</label>
                        <input required type="text" name="fullname" class="form-control login_name" id="exampleFormControlInput1" placeholder="Nguyễn Văn A">
                        <p id="message_username"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
                        <input required type="password" name="password" class="form-control login_pass" id="exampleFormControlInput1" placeholder="1111111">
                    </div>
                </div>

            </div>
            <div class="group_button">

                <a href="Register">Đăng Ký</a>
                <button type="submit" name="dangnhap" class="btn btn-primary login">Đăng Nhập</button>
            </div>


        </form>

    </div>
</div>