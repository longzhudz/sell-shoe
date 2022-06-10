<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý đơn hàng</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlysanpham.html">Quản lý đơn hàng</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="context-menu">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="padding-left:20px;">
                        <p class="mt-2">Thông tin đơn hàng số: <?=$get_id['id']?> </p>
                        <p>Người đặt hàng: Khách hàng <?= $get_id['user_buy']?></p>
                        <p>Số lượng: <?=$get_id['soluong']?> </p>
                        <p>Tổng tiền: <?=$get_id['price']?></p>
                        <p>Ghi chú: <?=$get_id['info']?></p>
                        <div class="row">
                            <div class="col-2">Hình thức thanh toán:</div>
                             <div class="col-10">
                             <?php if($get_id['pay']== 2) { ?>
                                <p class="text-primary fw-bolder" >Thanh toán khi nhận hàng</p>
                                            <?php }elseif($get_id['pay']== 0){ ?> 
                                                <p class="text-success fw-bolder">Thanh toán bằng momo</p>       
                                            <?php }elseif($get_id['pay']== 1){ ?>
                                                <p class="text-danger fw-bolder">Chuyển khoản</p>  
                            <?php }?>
                             </div> 
                        </div>
                        <div class="row">
                            <div class="col-2">Trạng thái:</div>
                             <div class="col-10">
                                 
                             <?php if($get_id['status']== 0) { ?>
                                <p class="text-primary fw-bolder" >Chưa xử lý</p>
                                            <?php }elseif($get_id['status']== 1){ ?> 
                                                <p class="text-success fw-bolder">Đã giao</p>       
                                            <?php }elseif($get_id['status']== 2){ ?>
                                                <p class="text-danger fw-bolder">Đã hủy</p>  
                            <?php }?>
                             </div> 
                        </div>
                        <div class="row">
                            <div class="col-2">Cập nhật:</div>
                             <div class="col-10">
                                 <form action="" method="POST">
                                     <select name="status" id="">
                                         <option value="0">Chưa xử lý</option>
                                         <option value="1">Đã giao</option>
                                         <option value="2">Hủy đơn</option>
                                     </select>
                                     <button type="submit" class="btn btn-outline-success" id="save-cate-list"><i data-feather="save"></i>Update</button>

                                 </form>
                            
                             </div> 
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section id="context-menu">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Đơn hàng hiện có</h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>Tên sản phẩm</th>
                                    
                                    <th>Hình ảnh</th>
                                    <th>Ngày đặt hàng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i = 0; $i<count($img) - 1; $i++) {?>
                                       
                                    <tr>
                                        <td><?=$name[$i]?></td>
                                        
                                        <td><div class="d-flex align-items-center">
                                                <div class="avatar rounded">
                                                    <div class="avatar-content">
                                                   
                                                        <img style="width:50px" src="<?=$img[$i]?>" alt="Rocket svg" />
                                                    
                                                    </div>
                                                </div>
                                            </div> </td>
                                        <td><?= $get_id['date_time'] ?></td>
                                    </tr>
                                    <?php }?>
                                    


                              
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>




