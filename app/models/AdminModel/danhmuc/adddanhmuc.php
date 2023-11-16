<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" name="ten_danh_muc" placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả danh mục</label>
                <input type="text" class="form-control" required name="mo_ta" id="exampleInputPassword1" placeholder="Mô tả danh mục">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Hình Ảnh </label>
                <input type="file" class="form-control" required name="hinh_anh" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="show">Còn </option>
                    <option value="none">Hết </option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="adddanhmuc" class="btn btn-primary">Thêm danh mục</button>
        </div>
    </form>
</div>