<?php
class CustomerDB{
    private $conn;

    public function __construct(){
        $this->conn = new PDO(dsn: "mysql:host=localhost;dbname=qlkh_tester_aht", username: "root", password: "");
    }
    
    public function getAllCustomers($page = 1): array{
        $offset = ($page - 1) * 6; # để phân page show 6 dữ liệu từ db cho từng trang
        $stmt = $this->conn->prepare(query: "SELECT * FROM customers LIMIT 6 OFFSET ?");
        $stmt->execute(params: [$offset]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCustomerById($id): Customer|null {
        $stmt = $this->conn->prepare(query: "SELECT * FROM customers WHERE id = ?");
        $stmt->execute(params: [$id]);
        $result = $stmt->fetch(mode: PDO::FETCH_ASSOC);

        if ($result) {
            return new Customer(id: $result['id'], name: $result['name'], email: $result['email'], address: $result['address']);
        }
        return null;
    }

    public function insertCustomer($customer): bool{
        $stmt = $this->conn->prepare(query: "INSERT INTO customers (name, email, address) VALUES (?, ?, ?)");
        return $stmt->execute(params: [$customer->name, $customer->email, $customer->address]);
    }

    public function updateCustomer($customer): bool{
        $stmt = $this->conn->prepare(query: "UPDATE customers SET name = ?, email = ?, address = ? WHERE id = ?");
        return $stmt->execute(params: [$customer->name, $customer->email, $customer->address, $customer->id]);
    }

    public function deleteCustomer($id): bool{
        $stmt = $this->conn->prepare("DELETE FROM customers WHERE id = ?");
        return $stmt->execute(params: [$id]);
    }
}
?>