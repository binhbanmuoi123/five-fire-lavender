<?php 
// Quản lý các trang cart
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'product':
            include_once 'views/v_header.php';
            include_once 'models/m_product.php';
            $getAllProduct = getAllProduct();
            include_once 'views/v_product.php';
            break;

        case 'delete':
            include_once 'views/v_header.php';
            include_once 'models/m_product.php';
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $deleteProduct = deleteProduct($_GET['id']); // Gọi hàm xóa sản phẩm
                if ($deleteProduct) {
                    // Tải lại danh sách sản phẩm sau khi xóa
                    header("Location: ?mod=admin-product&act=product");
                    exit();
                } else {
                    echo "Xóa sản phẩm thất bại!";
                }
            } else {
                die("ID không hợp lệ");
            }
            break;

            case 'add':
                include_once 'views/v_header.php';
                include_once 'views/v_product.php'; // Form thêm sản phẩm
                include_once 'models/m_product.php';
            
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Lấy dữ liệu từ form
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $oldprice = $_POST['oldprice'];
                    $description = $_POST['description'];
                    $categories_id = $_POST['categories_id'];
                    $status = $_POST['status'];
            
                    // Thư mục lưu file ảnh
                    $upload_dir_main = 'publics/img/';
                    $upload_dir_user = '..  /public/img/';
            
                    // Đảm bảo các thư mục tồn tại
                    if (!is_dir($upload_dir_main)) {
                        mkdir($upload_dir_main, 0777, true); // Tạo thư mục chính nếu chưa tồn tại
                    }
                    if (!is_dir($upload_dir_user)) {
                        mkdir($upload_dir_user, 0777, true); // Tạo thư mục người dùng nếu chưa tồn tại
                    }
            
                    // Danh sách các định dạng file ảnh cho phép
                    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            
                    // Hàm xử lý ảnh
                    function handleImageUpload($file_input, $upload_dir_main, $upload_dir_user, $allowed_extensions) {
                        if (!isset($_FILES[$file_input]) || $_FILES[$file_input]['error'] !== 0) {
                            return ''; // Không có file hoặc lỗi khi upload
                        }
            
                        $image_tmp = $_FILES[$file_input]['tmp_name'];
                        $image_name = $_FILES[$file_input]['name'];
                        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
            
                        // Kiểm tra định dạng ảnh
                        if (!in_array(strtolower($image_ext), $allowed_extensions)) {
                            die("File ảnh {$file_input} không hợp lệ. Vui lòng chọn JPG, PNG, GIF hoặc WEBP.");
                        }
            
                        // Tạo tên mới cho file ảnh để tránh trùng lặp
                        $image_new = uniqid() . '.' . $image_ext;
            
                        // Di chuyển file ảnh vào cả hai thư mục
                        if (!move_uploaded_file($image_tmp, $upload_dir_main . $image_new)) {
                            die("Lỗi khi di chuyển file {$file_input} đến thư mục chính.");
                        }
                        // Copy ảnh sang thư mục người dùng
                        if (!copy($upload_dir_main . $image_new, $upload_dir_user . $image_new)) {
                            die("Lỗi khi sao chép file {$file_input} đến thư mục người dùng.");
                        }
            
                        return $image_new;
                    }
            
                    // Xử lý từng ảnh
                    $image1_new = handleImageUpload('image_01', $upload_dir_main, $upload_dir_user, $allowed_extensions);
                    $image2_new = handleImageUpload('image_02', $upload_dir_main, $upload_dir_user, $allowed_extensions);
                    $image3_new = handleImageUpload('image_03', $upload_dir_main, $upload_dir_user, $allowed_extensions);
                    $image4_new = handleImageUpload('image_04', $upload_dir_main, $upload_dir_user, $allowed_extensions);
            
                    // Thêm sản phẩm vào cơ sở dữ liệu
                    addProduct($name, $price, $oldprice, $image1_new, $image2_new, $image3_new, $image4_new, $description, $categories_id, $status);
            
                    // Sau khi thêm thành công, chuyển hướng về trang danh sách sản phẩm
                    header("Location: ?mod=admin-product&act=product");
                    exit();
                }   
            
                break;
                case 'edit':
                    include_once 'views/v_header.php';
                    include_once 'models/m_product.php';
                    $productEdit=getProductById($_GET['id']);
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        include_once "views/v_edit.php";
                    } else {
                        die("ID không hợp lệ");
                    }
                    break;
                    case 'update':
                        include_once 'views/v_header.php';
                        include_once 'models/m_product.php';
                    
                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
                            // Lấy dữ liệu từ form
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $oldprice = $_POST['oldprice'];
                            $description = $_POST['description'];
                            $categories_id = $_POST['categories_id'];
                            $status = $_POST['status'];
                    
                            // Thư mục lưu file ảnh
                            $upload_dir_main = 'publics/img/';
                            $upload_dir_user = '../public/img/';
                    
                            // Đảm bảo các thư mục tồn tại
                            if (!is_dir($upload_dir_main)) {
                                mkdir($upload_dir_main, 0777, true);
                            }
                            if (!is_dir($upload_dir_user)) {
                                mkdir($upload_dir_user, 0777, true);
                            }
                    
                            // Danh sách các định dạng file ảnh cho phép
                            $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                    
                            // Hàm xử lý ảnh (tương tự như trong `case add`)
                            function handleImageUpload($file_input, $upload_dir_main, $upload_dir_user, $allowed_extensions) {
                                if (!isset($_FILES[$file_input]) || $_FILES[$file_input]['error'] !== 0) {
                                    return ''; // Không có file hoặc lỗi khi upload
                                }
                    
                                $image_tmp = $_FILES[$file_input]['tmp_name'];
                                $image_name = $_FILES[$file_input]['name'];
                                $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
                    
                                if (!in_array(strtolower($image_ext), $allowed_extensions)) {
                                    die("File ảnh {$file_input} không hợp lệ. Vui lòng chọn JPG, PNG, GIF hoặc WEBP.");
                                }
                    
                                $image_new = uniqid() . '.' . $image_ext;
                    
                                if (!move_uploaded_file($image_tmp, $upload_dir_main . $image_new)) {
                                    die("Lỗi khi di chuyển file {$file_input} đến thư mục chính.");
                                }
                                if (!copy($upload_dir_main . $image_new, $upload_dir_user . $image_new)) {
                                    die("Lỗi khi sao chép file {$file_input} đến thư mục người dùng.");
                                }
                    
                                return $image_new;
                            }
                    
                            // Xử lý từng ảnh, nếu có
                            $image1_new = handleImageUpload('image_01', $upload_dir_main, $upload_dir_user, $allowed_extensions) ?: $_POST['current_image_01'];
                            $image2_new = handleImageUpload('image_02', $upload_dir_main, $upload_dir_user, $allowed_extensions) ?: $_POST['current_image_02'];
                            $image3_new = handleImageUpload('image_03', $upload_dir_main, $upload_dir_user, $allowed_extensions) ?: $_POST['current_image_03'];
                            $image4_new = handleImageUpload('image_04', $upload_dir_main, $upload_dir_user, $allowed_extensions) ?: $_POST['current_image_04'];
                    
                            // Cập nhật sản phẩm trong cơ sở dữ liệu
                            $updateProduct = updateProduct($id, $name, $price, $oldprice, $image1_new, $image2_new, $image3_new, $image4_new, $description, $categories_id, $status);
                    
                            if ($updateProduct) {
                                // Sau khi cập nhật thành công, chuyển hướng về trang danh sách sản phẩm
                                header("Location: ?mod=admin-product&act=product");
                                exit();
                            } else {
                                echo "Cập nhật sản phẩm thất bại!";
                            }
                        } else {
                            die("Dữ liệu không hợp lệ!");
                        }
                    
                        break;
                    
                   
            # code cho trường hợp khác...
            break;
    }
} else {
    header("Location: ?mod=admin-home&act=home");
    exit();
}

// Hàm thêm sản phẩm vào cơ sở dữ liệu
