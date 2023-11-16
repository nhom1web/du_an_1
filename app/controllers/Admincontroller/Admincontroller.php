<?php

    if(isset($_GET['pg'])){
        $pg =$_GET['pg'];
    switch ($pg) {

// tài khoản :
  
    case 'taikhoan':
    include ('../../models/AdminModel/taikhoan/tk.php');
    break;

    // case 'addtk':
    // include ('../../models/AdminModel/taikhoan/addtk.php');
    // break;


    // danh mục
    
    case 'danhmuc':
        include ('../../models/AdminModel/danhmuc/danhmuc.php');
       
      break;

      case 'adddm':
        include ('../../models/AdminModel/danhmuc/adddanhmuc.php');
       
      break;

    // sản phẩm


    case 'sanpham':
        include ('../../models/AdminModel/sanpham/sanpham.php');
       break;
    case 'addsp':
        include ('../../models/AdminModel/sanpham/addsp.php');
        break;
    
     case 'suasp':
            include ('../../models/AdminModel/sanpham/suasp.php');
            break;

    // khuyến mái 
        
    case 'khuyenmai':
        include ('../../models/AdminModel/khuyenmai/khuyenmai.php');

       break;

    case 'taokhuyenmai':
        include ('../../models/AdminModel/khuyenmai/taokhuyenmai.php');

       break;

       //   đơn hàng sản phẩm 
       
       case 'donhang':
        include ('../../models/AdminModel/donhang/donhang.php');
       break;

    }

   

}else{
    include ("../../../app/views/admin/layout/footer.php");
}

?>