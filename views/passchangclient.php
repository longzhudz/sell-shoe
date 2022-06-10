<div class="limiter">
		<div class="container-login100" style="background-image: url('/uploads/img/bg-01.jpg');">
			<div class="wrap-login100">
				<form id="changepass2" action="" method="POST"  class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title">
						Đổi mật khẩu
					</span>
                    <div class="login100-form login-user">
						<span class="txt1">
                            <i class="fas fa-user"></i>
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
                        
						<input class="input100" id="username" readonly type="text" name="username" value="<?=$info['username']?>">
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
                    <div class="login100-form login-pass">
						<span class="txt1">
                            <i class="fas fa-unlock-alt"></i>
							Confirm Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="confirm" type="password" name="confirm" placeholder="Nhập mật khẩu..." >
						<span class="focus-input100"></span>
					</div>
					

					

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" data-token=<?=$info['token']?> data-user=<?=$info['id']?> id="changepass2_button" class="login100-form-btn">
							Xác nhận
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
                         $('#changepass2').submit( function(event){
                            event.preventDefault();
                            var password = $(this).find('input[name="password"]').val();
                            var confirm = $(this).find('input[name="confirm"]').val();

                            var user = $('#changepass2_button').data('user');
                            var token = $('#changepass2_button').data('token');

                            var flag = 0;
                            if(password == '' || confirm == ''){
                                flag =1;
                                error = 'Không bỏ trống thông tin';
                            }
                            else if(password != confirm){
                                flag = 1;
                                error = 'Nhập lại mật khẩu không chính xác'
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
                                url: '../handling/passchangclient.php',
                                type: 'POST',
                                method: 'POST',
                                data: {password: password,user: user, token: token},
                                beforeSend: function(){
                                    $('#changepass2_button').attr('disabled', 'true');
                             }
                           })
                            .done(function(result) {
                                $('#changepass2_button').removeAttr('disabled');
                                if(result == 'done')
                                {
                                   header('location: /home.html');
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
                                $('#changepass2_button').removeAttr('disabled');

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