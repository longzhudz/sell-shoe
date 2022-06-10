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
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Đơn hàng hiện có</h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                    <th>Đơn số</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Xem chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($load as $key => $value) { ?>
                                    <tr>
                                        <td><?=$value['id']?></td>
                                        <td><?=$value['soluong']?></td>
                                        <td><?=$value['price']?></td>
                                        <?php if($value['status']== 0) { ?>
                                            <td class="text-primary fw-bolder" >Chưa xử lý</td>
                                            <?php }elseif($value['status']== 1){ ?> 
                                                <td class="text-success fw-bolder">Đã giao</td>       
                                            <?php }elseif($value['status']== 2){ ?>
                                                <td class="text-danger fw-bolder">Đã hủy</td>  
                                                <?php }?>
                                            
                                        <td>
                                            <?= $value['date'] ?>
                                        </td>
                                       

                                       
                                        <?php ?>
                                        <td>
                                            <div class="d-flex align-items-center ">
                                                <button class="btn btn-outline-success btn-sm "><a href="./index.php?ctrl=chitietdonhang&id=<?=$value['id']?>"><i data-feather="edit"></i></a></button>
                                                <button class="btn btn-outline-danger btn-sm btn-delete-cart " ><a onclick="return Del('<?= $value['id']?>')" href="./index.php?ctrl=xoadonhang&id=<?=$value['id']?>"><i  data-feather="delete"></i></a></button>
                                            </div>  
                                        </td>
                                        <?php ?>
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


<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
       
        //delete cart
        });
        
</script>
<script>
    function Del(name)
    {
        return confirm('Bạn có muốn xóa đơn hàng số: '+ name + "?");
    }
</script>


