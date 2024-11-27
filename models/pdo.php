<?php
// Kết nối đến CSDL sử dụng PDO
function pdo_connect() {
    $servername = "localhost";
    $database = "lavander";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Kết nối CSDL thất bại: " . $e->getMessage());
    }
}

/**
 * Chạy câu lệnh SQL để INSERT, UPDATE, DELETE
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return bool True nếu thành công, False nếu thất bại
 */
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_connect();
        $stmt = $conn->prepare($sql);
        return $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

/**
 * Chạy câu lệnh SQL SELECT và trả về tất cả bản ghi
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return array Mảng các bản ghi
 */
function pdo_getAll($sql, $params = []) {
    try {
        $conn = pdo_connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Chỉ lấy kết quả với tên cột
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Chạy câu lệnh SQL SELECT và trả về 1 bản ghi
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return array|null Mảng chứa bản ghi hoặc null nếu không có bản ghi nào
 */
function pdo_getOne($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

/**
 * Chạy câu lệnh SQL SELECT để lấy 1 giá trị
 * @param string $sql Câu lệnh SQL
 * @param array $params Mảng giá trị cung cấp cho các tham số của $sql
 * @return mixed Giá trị trả về hoặc null nếu không có kết quả
 */
function pdo_getValue($sql, $params = []) {
    try {
        $conn = pdo_connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? array_values($row)[0] : null; // Kiểm tra null trước khi trả về giá trị
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_executehehee($sql, $params = []) {
    try {
        $conn = pdo_connect();
        $stmt = $conn->prepare($sql);
        return $stmt->execute($params); // Truyền mảng tham số vào đây
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
?>
