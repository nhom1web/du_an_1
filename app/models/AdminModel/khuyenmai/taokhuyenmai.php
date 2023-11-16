<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm Khuyến Mãi </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã khuyến mãi </label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="ten_san_pham" placeholder="Tên sản phẩm ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control" name="tien_sp" required id="exampleInputPassword1" placeholder="Tiền sản phẩm">
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
    <label for="exampleInputPassword1">Ngày Tháng Năm Bắt Đầu </label>
    <input type="date" name="ngayThangNam" id="ngayThangNam" required>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Ngày Tháng Năm Kết thúc  </label>
    <input type="date" name="ngayThangNam" id="ngayThangNam" required>
</div>

           
        <div class="card-footer">
            <button type="submit" name="addkhoahoc" class="btn btn-primary">Thêm Khuyến Mãi </button>
        </div>
    </form>
</div>