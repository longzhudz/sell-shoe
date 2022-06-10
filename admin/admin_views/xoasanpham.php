<div class="app-content content">
    <div class="content-overlay">
    </div>
    <div class="header-navbar-shadow"></div>
    <div class="header-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Quản lý sản phẩm</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./home">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="./quanlysanpham.html">Quản lý sản phẩm</a>
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
                            <h4 class="card-title">Xóa sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                
                            </p>
                            <div class="row">
                                <form id="form-add-ajax" action="" method="POST" role="form" enctype="multipart/form-data">
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Tên sản phẩm</label>
                                        <input name="cate_name" value="<?=$pro['name']?>" type="text" id="name-cate" onkeyup="ChangeToSlug();" class="form-control" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Đường dẫn tĩnh</label>
                                        <input name="slug" value="<?=$pro['slug']?>" type="text" class="form-control" id="slug" disabled="" placeholder="https://longdeptrai.com/Đường dẫn tĩnh">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2 ">
                                        <label for="">Trạng thái hoạt động </label>
                                        <div class="form-control">
                                            <label  for=""><input type="radio" name="status" id="status" value="0" checked="checked">Hoạt động</label>
                                            <label  for=""><input type="radio" name="status" id="status" value="1">Bảo trì</label>
                                        </div>                     
                                    </div>
                                    
                                    

                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Hình ảnh mô tả</label>
                                        <input name="img_cates[]" type="file" id="img-cate" multiple="multiple" class="form-control" placeholder="Link hình ảnh ở quản lý hình ảnh">
                                    <?php for($i = 0; $i < count($img) - 1; $i++ ) {
                                        ?>
                                        <div class="col-md-4">
                                            <a href="" class="thumbnail">
                                                <img src="<?=$img[$i]?>" style="width:100px" alt="">
                                            </a>
                                        </div>
                                    <?php }?>
                                    </div>
                                    
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Tên danh mục</label>
                                        <select name="id_cate" id="input" class="form-control" required="required">
                                            <?php foreach($catego as $key => $value) { ?>
                                            <option value="<?=$value['id']?>"><?=$value['name']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Giá khuyến mãi</label>
                                        <input  name="price_sale" value="<?=$pro['pricesale']?>" type="text" class="form-control" id="price_sale" placeholder="Nhập giá khuyến mãi">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Giá sản phẩm</label>
                                        <input  name="price" value="<?=$pro['price']?>" type="text" class="form-control" id="price_sale" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Mô tả</label>
                                        <textarea class="form-control"  name="text" id="input" rows="3" required="required"><?=$pro['text']?></textarea>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Size</label>
                                        <input  name="size" value="<?=$pro['size']?>" type="text" class="form-control" id="price_sale" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mb-2">
                                        <label for="">Số lượng</label>
                                        <input  name="quantity" type="text" value="<?=$pro['quantity']?>" class="form-control" id="price_sale" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="col-sm-12 col-lg-12 mb-2">
                                        <button type="submit" class="btn btn-outline-danger" id="save-cate-list"><i data-feather="delete"></i>Delete</button>
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
                            <h4 class="card-title">sản phẩm hiện có</h4>
                        </div>
                        <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đường dẫn tĩnh</th>
                                    <th>Trạng thái</th>
                                    <th>Hình ảnh</th>
                                    <th>Danh mục</th>
                                    <th>Giá khuyến mãi</th>
                                    <th>Giá bán</th>
                                    <th>Mô tả</th>
                                    <th>Kích cở</th>
                                    <th>Số lượng</th>

                                    <th>Chỉnh sửa</th>
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
                                                        <img style="width:50px" src="../uploads/img/<?=$value['img']?>" alt="Rocket svg" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?=$value['cate']?></td>
                                        <td><?=$value['pricesale']?></td>
                                        <td><?=$value['price']?></td>
                                        <td><?=$value['text']?></td>
                                        <td><?=$value['size']?></td>
                                        <td><?=$value['quantity']?></td>

                                       
                                        <?php ?>
                                        <td>
                                            <div class="d-flex align-items-center ">
                                                <button class="btn btn-outline-success btn-sm "><a href="./index.php?ctrl=suadanhmuc&id=<?=$value['id']?>"><i data-feather="edit"></i></a></button>
                                                <button class="btn btn-outline-danger btn-sm"><a href="./index.php?ctrl=xoadanhmuc&id=<?=$value['id']?>"><i  data-feather="delete"></i></a></button>
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

