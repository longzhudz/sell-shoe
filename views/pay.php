<div class="container" style="padding-top:40px">
    <div class="row">
        <h4 class="text-uppercase">Chọn hình thức thanh toán</h4>
        <div class="col-12 d-flex">
            
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="hinhthuc" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Thanh toán bằng MoMo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="2"  type="radio" name="hinhthuc" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Thanh toán bằng tiền mặt
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="3"  type="radio" name="hinhthuc" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    Thanh toán bằng ATM
                </label>
            </div>
        </div>
        <div class="col-12">
            <textarea class="form-control" name="thongtin" id="" cols="30" rows="10" placeholder="Nhập họ tên, địa chỉ & SĐT người nhận hàng"></textarea>
        </div>
        <div class="row">
            <div class="col-6">
                <h4>Tổng đơn hàng: <strong class="text-danger"><?=$func->tong_bill($_SESSION['giohang'],2) ?></strong></h4>
            </div>
            <div class="col-6">
                <h4>Tổng giá tiền: <strong><?=$func->tong_bill($_SESSION['giohang'],1) ?> $</strong></h4>
            </div>
        </div>
        <div>
            <button class="btn btn-success" id="thanh-toan">Đặt hàng</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#thanh-toan').click(function (e) { 
            var hinhthuc = $('input[name="hinhthuc"]:checked').val();
            var thongtin = $('textarea[name="thongtin"]').val();
            $.ajax({
                url: '/ajax/thanhtoan.php',
                type: 'POST',
                method: 'POST',
                data: {hinhthuc: hinhthuc, thongtin: thongtin},
            })
            .done(function(result)
            {
                if(result == 'done')
                {
                    alert('Đặt hàng thành công !');
                }
                else
                {
                    alert(result);
                }
            })
            .fail(function(){
                console.log("error");
            });
        });
    });
</script>