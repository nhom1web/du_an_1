<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sửa Sản Phẩm </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Sản phẩm </label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="ten_san_pham" placeholder="Tên sản phẩm ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control" name="tien_sp" required id="exampleInputPassword1" placeholder="Tiền sản phẩm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh đại diện</label>
                <input type="file" class="form-control" name="avt" id="exampleInputPassword1" placeholder="ảnh đại diện sản phẩm ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="mo_ta" placeholder="Mô tả sản phẩm">
            </div>
          
            <div class="form-group">
                <label for="exampleInputPassword1">Số lượng</label>
                <input type="text" class="form-control" id="exampleInputPassword1" required name="so_luong" placeholder="số lượng ">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Trạng Thái </label>
                <select name="slideshow" id="">
                    <option value="con">Còn Hàng</option>
                    <option value="het">Hết hàng</option>
                </select>
            </div>

           
        <div class="card-footer">
            <button type="submit" name="addkhoahoc" class="btn btn-primary">Sửa Sản Phẩm </button>
        </div>
    </form>
</div>