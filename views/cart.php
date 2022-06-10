<div class="container">
    <div style="text-align:center; margin-top: 20px;"><h2><strong>Giỏ hàng của bạn đây</strong></h2></div>
    <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Image</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $giohang = $_SESSION['giohang'];
            foreach($giohang as $key => $value) { ?> 
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td><img src="<?= $value['img']?>" alt="" style="width:50px"></td>
                <td><?= $value['price']?></td>
                <td>
                    <div class="input-group">
                        <button  class="btn-cart-formcart btn btn-danger text-light congtru" data-id='<?= $value['id']?>' data-rule='1'>-</button>
                        <input id="soluong-<?= $value['id']?>"  class="form-control" type="number" value="<?= $value['soluong']?>">
                        <button  class="btn-cart-formcart btn btn-success text-light congtru" data-id='<?= $value['id']?>' data-rule='2'>+</button>
                    </div>
                   
                </td>
                <td style="display:flex">
                    <button class="btn-cart-formcart btn btn-primary btn-sm btn-update-cart" data-id='<?= $value['id']?>'>Cập nhật</button>
                    <button class="btn-cart-formcart btn btn-danger btn-sm btn-delete-cart" data-id='<?= $value['id']?>'>Xóa</button>

                </td>                
            </tr>
            <?php  } ?>
        </tbody>
      
    </table>
    <hr class="w-100 bg-primary">
    <div>
        <h2 class="h2-tongtien">Tổng giá tiền:
            <strong class="text-danger" id='tong-gia-tien'>
                <?= number_format($func->tong_bill($_SESSION['giohang'],1))?> $
            </strong></h2>
        <h2 class="h2-tongtien">Tổng số lượng:
            <strong class="text-primary" id='tong-so-luong'>
                <?= number_format($func->tong_bill($_SESSION['giohang'],2))?> 
            </strong></h2>
    </div>
    <button style="margin-left:85%;" class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="/pay.html">Đặt hàng ngay</a></button>
</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        //cộng trừ button
        $("#myTable tbody").on('click', '.congtru',function(e) { 
            var id = $(this).data('id');
            var rule = $(this).data('rule');
            var soluong = $("#soluong-"+id);
            var dk = 0;
            if(rule == 1)
            {
                dk = -1;
            }
            else
            {
                dk = 1;
            }
            var tinhtoan = +soluong.val() + dk;
            soluong.val(tinhtoan);
            
        });
        //update cart
        $("#myTable tbody").on('click','.btn-update-cart',function (e) { 
            var id = $(this).data('id');
            var soluong = $("#soluong-"+id).val();

            $.ajax({
                url: "./ajax/update_cart.php",
                type: "POST",
                method: "POST",
                data: {id: id, soluong: soluong, rule: 0},
            })
            .done(function(result){
                swal("Thông báo","Cập nhật thành công","success");
                var obj = JSON.parse(result);
                $('#tong-gia-tien').html(obj.tong+ '$');
                $('#tong-so-luong').html(obj.soluong);

            })
            .fail(function(result){
                console.log("error");
            })
            
        });
        //delete cart
        $("#myTable tbody").on('click','.btn-delete-cart',function(e)
        {
            var id = $(this).data('id');
            swal("Thông báo","Bạn có muốn xóa nó.","warning")
            .then((value) => {
                if(value)
                {
                    $.ajax({
                    url: "./ajax/update_cart.php",
                    type: "POST",
                    method: "POST",
                    data: {id: id, rule: 1},
                    })
                    .done(function(){
                        swal("Thông báo","Xóa thành công","success").then( (vl)=>{
                            location.reload();
                        } );
                       

                    })
                    .fail(function(result){
                        console.log("error");
                    })
                }
            });
        });
        });

</script>