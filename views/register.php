<div class="limiter">
		<div class="container-login100" style="background-image: url('/uploads/img/bg-01.jpg');">
			<div class="wrap-login100">
				<form id="register-ajax-load" action="" method="" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title">
						Đăng ký tại đây
					</span>

					<div class="login100-form login-user">
						<span class="txt1">
                        <i class="fa fa-user fa" aria-hidden="true"></i>
							Họ và tên
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên...">
						<span class="focus-input100"></span>
					</div>

                    <div class="login100-form login-pass">
						<span class="txt1">
                        <i class="fa fa-envelope fa" aria-hidden="true"></i>
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="email" type="email" name="email" placeholder="Nhập email..." >
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="login100-form login-pass">
						<span class="txt1">
                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
							Số điện thoại
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="phone" type="text" name="phone" placeholder="Nhập số điện thoại..." >
						<span class="focus-input100"></span>
					</div>
					
                    <div class="login100-form login-pass">
						<span class="txt1">
                        <i class="fa fa-users fa" aria-hidden="true"></i>
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="username" type="text" name="username" placeholder="Nhập tài khoản  ..." >
						<span class="focus-input100"></span>
					</div>

					<div class="login100-form login-pass">
						<span class="txt1">
                        <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="password" type="password" name="password" placeholder="Nhập mật khẩu..." >
						<span class="focus-input100"></span>
					</div>

                    <div class="login100-form login-pass">
						<span class="txt1">
                        <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
							RePassword
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="confirm" type="password" name="confirm" placeholder="Nhập mật khẩu..." >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" id="register_btn" class="login100-form-btn">
							Đăng ký
						</button>
					</div>

					<span class="login100-form-title2 m-t-70 m-b-20">
						Đã có tài khoản
					</span>
					
					<div class="w-full text-center">
						<span class="txt2">
                            Bạn đã có tài khoản ? Đăng nhập
						</span>

						<a href="login.html" class="txt2 bo1">
							Tại đây
						</a>
					</div>
				</form>
			</div>
		</div>


        <script>
            $(document).ready(function() {
             $('#register-ajax-load').submit( function(event){
                event.preventDefault();
                var username = $(this).find('input[name="username"]').val();
                var password = $(this).find('input[name="password"]').val();
                var fullname = $(this).find('input[name="fullname"]').val();
                var email = $(this).find('input[name="email"]').val();
                var phone = $(this).find('input[name="phone"]').val();
                var confirm = $(this).find('input[name="confirm"]').val();
                
                var flag = 0;


                if(username.length < 5 || username.length > 16){
                    flag = 1;
                    error = 'Tài khoản phải tối thiểu từ 5 đến 16 ký tự';
                }else if(username == '' || password == ''|| fullname == '' || email == '' || phone == '' || confirm == ''){
                    flag =1;
                    error = 'Không bỏ trống thông tin';
                }else if(fullname.length < 1 || fullname.length > 26)
                {
                    flag = 1;
                    error = 'Tên của bạn không hợp lệ';
                }else if(password != confirm)
                {
                    flag = 1;
                    error = 'Mật khẩu xác nhận không chính xác';
                }

                if(flag == 1){
                   swal({   
                    title: "Thông báo",
                    html: true,
                    text: error,   
                    showConfirmButton:true

                })
               }else{
                $.ajax({
                    url: '../handling/register.php',
                    type: 'POST',
                    method: 'POST',
                    data: {username: username, password: password, fullname: fullname, email: email, phone: phone, confirm: confirm },
                    beforeSend: function(){
                        $('#register_btn').attr('disabled', 'true');
                 }
               })
                .done(function(result) {
                    $('#register_btn').removeAttr('disabled');
                    if(result == 'done')
                    {
                       location.reload();
                    }
                    else
                    {
                        swal({   
                        title: "Thông báo",
                        html: true,
                        text: result,   
                        showConfirmButton:true
                        })
                    }
                })
                .fail(function() {
                    $('#register_btn').removeAttr('disabled');
                    swal({   
                    title: "Thông báo",
                    html: true,
                    text: 'Kiểm tra đường truyền mạng',
                    showConfirmButton:true

                })
                });
            }       
            } )   
            });
        </script> 
</div>
   