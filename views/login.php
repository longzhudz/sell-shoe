    <div class="limiter">
		<div class="container-login100" style="background-image: url('/uploads/img/bg-01.jpg');">
			<div class="wrap-login100">
				<form id="login_ajax_load" action="" method="" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title">
						Đăng nhập
					</span>
					<div class="login100-form login-user">
						<span class="txt1">
                            <i class="fas fa-user"></i>
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="username" type="text" name="username" placeholder="Nhập tài khoản...">
						<span class="focus-input100"></span>
					</div>
					
					<div class="login100-form login-pass">
						<span class="txt1">
                            <i class="fas fa-unlock-alt"></i>
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="password" type="password" name="password" placeholder="Nhập mật khẩu..." >
						<span class="focus-input100"></span>
					</div>
					<div class="w-full text-right p-t-20">
						<a href="forgetpass.html" class="txt2 bo1">
							Quên mật khẩu ?
						</a>
					</div>

					

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" id="login_button" class="login100-form-btn">
							Đăng nhập
						</button>
					</div>

					<span class="login100-form-title2 m-t-70 m-b-20">
						Bạn có thể đăng nhập với 
					</span>

					<a href="<?= $authUrl?>" class="login100-form-btn login100-form-btn-google btn-google m-b-20">
						<img src="/uploads/img/icon-google.png" alt="">
						Login with Google
					</a>
					
					
					<div class="w-full text-center item-bottom">
						<span class="txt2">
                            Bạn chưa có tài khoản ? Đăng ký
						</span>

						<a href="register.html" class="txt2 bo1">
							Tại đây
						</a>
					</div>
				</form>
			</div>
		</div>


		<script>
                    	$(document).ready(function() {
                         $('#login_ajax_load').submit( function(event){
                            event.preventDefault();
                            var username = $(this).find('input[name="username"]').val();
                            var password = $(this).find('input[name="password"]').val();
                            var flag = 0;
                            if(username.length < 5 || username.length > 16){
                                flag = 1;
                                error = 'Tài khoản tối thiểu 5 ký tự và tối đa 16 ký tự'
                            }else if(username == '' || password == ''){
                                flag =1;
                                error = 'Không bỏ trống thông tin';
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
                                url: '../handling/login.php',
                                type: 'POST',
                                method: 'POST',
                                data: {username: username, password: password},
                                beforeSend: function(){
                                    $('#login_button').attr('disabled', 'true');
                             }
                           })
                            .done(function(result) {
                                $('#login_button').removeAttr('disabled');
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
                                $('#login_button').removeAttr('disabled');

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