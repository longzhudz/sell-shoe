<div class="limiter">
		<div class="container-login100" style="background-image: url('/uploads/img/bg-01.jpg');">
			<div class="wrap-login100">
				<form id="forget" action="" method="" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title">
						Quên mật khẩu
					</span>
					<div class="login100-form login-user">
						<span class="txt1">
                            <i class="fas fa-user"></i>
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" id="email" type="email" name="email" placeholder="Nhập email bạn đã đăng ký...">
						<span class="focus-input100"></span>
					</div>
					

					

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" id="forget_button" class="login100-form-btn">
							Lấy lại mật khẩu
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
                         $('#forget').submit( function(event){
                            event.preventDefault();
                            var email = $(this).find('input[name="email"]').val();
                            var flag = 0;
                            if(email == ''){
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
                                url: '../handling/forget.php',
                                type: 'POST',
                                method: 'POST',
                                data: {email: email},
                                beforeSend: function(){
                                    $('#forget_button').attr('disabled', 'true');
                             }
                           })
                            .done(function(result) {
                                $('#forget_button').removeAttr('disabled');
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
                                $('#forget_button').removeAttr('disabled');

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