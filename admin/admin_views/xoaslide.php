<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý Slide</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlyslide.html">Quản lý slide</a>
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
                            <h4 class="card-title">Xóa slide</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                
                            </p>
                            <div class="row">
                                <form id="form-add-ajax" action="" method="POST" role="form" enctype="multipart/form-data">
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Tên danh mục</label>
                                        <input name="cate_name" type="text" value="<?=$get_id['name']?>" id="name-cate"  onkeyup="ChangeToSlug();" class="form-control" placeholder="Tên danh mục">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Đường dẫn tĩnh</label>
                                        <input name="slug" type="text" value="<?=$get_id['slug']?>" class="form-control" id="slug" disabled="" placeholder="https://longdeptrai.com/Đường dẫn tĩnh">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2 ">
                                        <label for="">Trạng thái hoạt động </label>
                                        <div class="form-control">
                                            <label  for=""><input type="radio" name="status" id="status" value="0" checked="checked">Hoạt động</label>
                                            <label  for=""><input type="radio" name="status" id="status" value="1">Bảo trì</label>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        </div>                     
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Hình ảnh
                                        <p class="card-text">
                                                Dành cho "Slide thương hiệu ở trang Home"
                                        </p>
                                        </label>
                                        <input name="img_cate" type="file" id="img-cate" class="form-control" placeholder="Link hình ảnh ở quản lý hình ảnh">
                                        <img style="width:50px" src="/uploads/img/<?=$get_id['img']?>" alt="">
                                    </div>
                                    <div class="col-sm-12 col-lg-12 mb-2">
                                        <button type="submit" class="btn btn-outline-danger" id="save-cate-list"><i data-feather="save"></i>Delete</button>
                                    </div>
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
                            <h4 class="card-title">Slide hiện có</h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên Slide</th>
                                    <th>Đường dẫn tĩnh</th>
                                    <th>Trạng thái</th>
                                    <th>Hình ảnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($categ as $key => $value) {?>
                                    <tr>
                                        <td><?=$value['id']?></td>
                                        <td><?=$value['name']?></td>
                                        <td><?=$value['slug']?></td>
                                        <?php if($value['status']== 0) { ?>
                                            <td class="text-success fw-bolder" >Hoạt động</td>
                                            <?php }else{ ?> 
                                                <td class="text-danger fw-bolder">Bảo trì</td>       
                                            <?php }?>
                                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <div class="avatar rounded">
                                                <div class="avatar-content">
                                                    <img style="width:50px" src="../uploads/img/<?=$value['img']?>" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fw-bolder">Kmart</div>
                                                <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                                            </div>
                                            </div>
                                        </td>
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
    function ChangeToSlug()
    {
    var title, slug;
 
    //Lấy text từ thẻ input title 
    title = document.getElementById("name-cate").value;
 
    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
 
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
    }
</script>

