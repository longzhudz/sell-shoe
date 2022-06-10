<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý danh mục</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlydanhmuc.html">Quản lý danh mục</a>
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
                            <h4 class="card-title">Khách hàng liên hệ</h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Lời nhắn</th>
                                    <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($categ as $key => $value) {?>
                                    <tr>
                                        <td><?=$value['id']?></td>
                                        <td><?=$value['name']?></td>
                                        <td><?=$value['email']?></td>
                                        <td><?=$value['phone']?></td>
                                            
                                        <td>
                                           <?=$value['mess']?>
                                        </td>
                                       
                                        <?php ?>
                                        <td>
                                            <div class="d-flex align-items-center ">
                                                <button class="btn btn-outline-danger btn-sm"><a onclick="return Del('<?= $value['id']?>')" href="./index.php?ctrl=xoacontact&id=<?=$value['id']?>"><i  data-feather="delete"></i></a></button>
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
    function Del(name)
    {
        return confirm('Bạn có muốn xóa thư số: '+ name + "?");
    }
</script>