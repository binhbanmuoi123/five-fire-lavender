<?php 
// Quản lý các trang cart

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'category':
            include_once 'views/v_header.php';
            include_once 'models/m_category.php';
            $getAllCategory = getAllCategory();
            include_once 'views/v_category.php'; 
            break;
        case 'edit':
            include_once 'views/v_header.php';
            include_once 'models/m_category.php';
            $getCategoryById = getCategoryById($_GET['id']);
            if(isset($_GET['id']) && is_numeric($_GET['id'])){
                include_once 'views/v_update_category.php'; 
            }else{
                echo 'Id không tồn tại';
            }
         
            break;
        case 'update':
            include_once 'views/v_header.php';
            include_once 'models/m_category.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
                // Lấy dữ liệu từ form
                $id = $_POST['id'];
                $name = $_POST['name'];
                $status = $_POST['status'];
        
            
        
                // Cập nhật sản phẩm trong cơ sở dữ liệu
                $updateCategory = updateCategory($id, $name, $status);
        
                if ($updateCategory) {
                    // Sau khi cập nhật thành công, chuyển hướng về trang danh sách sản phẩm
                    header("Location: ?mod=admin-category&act=category");
                    exit();
                } else {
                    echo "Cập nhật sản phẩm thất bại!";
                }
            } else {
                die("Dữ liệu không hợp lệ!");
            }
        
            break;
            case 'add':
                include_once 'views/v_header.php';
                include_once 'models/m_category.php';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Lấy dữ liệu từ form
                    $name = $_POST['name'];
                    $status = $_POST['status'];
                    addCategory($name, $status);
                    // Sau khi thêm thành công, chuyển hướng về trang danh sách sản phẩm
                    header("Location: ?mod=admin-category&act=category");
                    exit();
                }else {
                    echo "Cập nhật sản phẩm thất bại!";
                }
                
                include_once 'views/v_add_category.php';
             
                break;

        default:
     
            break;
    }
} else {
    header("location:?mod=admin-home&act=home"); 
}
?>
