<?php
class CustomerDB{
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=qlkh_tester_aht", "root", "");
    }
    
    public function getAllCustomers($page = 1){
        $offset = ($page - 1) * 6; # để phân page show 6 dữ liệu từ db cho từng trang
        $query = "select * from customers limit 6 offset $offset";
        return $this->conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>