<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý tài khoản</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlydanhmuc.html">Quản lý tài khoản</a>
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
                            <h4 class="card-title">Chỉnh sửa người dùng</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form id="form-add-ajax" action="" method="POST" role="form" >
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Trạng thái hoạt động </label>
                                        <label class="form-control" for=""><input type="radio" name="status" id="status" value="0" checked="checked">Hoạt động</label>
                                        <label class="form-control" for=""><input type="radio" name="status" id="status" value="1">Khóa tài khoản</label>                                    
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <select name="rules" id="">
                                            <option value="0">Cấp quyền người dùng</option>
                                            <option value="0">Khách hàng</option>
                                            <option value="1">Admin</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-lg-12 mb-2">
                                        <button type="submit" class="btn btn-outline-primary" id="save-cate-list"><i data-feather="save"></i>Uploads</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>



